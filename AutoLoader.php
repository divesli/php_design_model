<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file AutoLoader.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/15 18:08:48
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief : 自动加载类 
 *  
 */

spl_autoload_register(array("AutoLoader","autoload"));

class AutoLoader {
    private static $_arrIncludeBuffer = null;
    private static $_cache = ".include_cache.php";

    /**
     * @brief : 返回当前路径
     */
    public static function getPath() {
        return dirname(__FILE__);
    }

    /**
     * @brief : 自动加载文件
     */
    public static function autoload($class) {
        if (!file_exists(self::$_cache) || !(include_once(self::$_cache))
            || !array_key_exists($class,self::$_arrIncludeBuffer)
            || !file_exists(self::$_arrIncludeBuffer[$class])) {
            self::refreshCache();
        }
        if (!array_key_exists($class,self::$_arrIncludeBuffer)) {
            return false;
        }
        return (include_once(self::$_arrIncludeBuffer[$class])) !== false;
    }

    /**
     * @brief : 生成缓存文件
     */
    public static function refreshCache() {
        $_tmp_cache = self::$_cache.mt_rand(0,1000);
        $files = self::findAllFile();
        self::$_arrIncludeBuffer = self::buildClass($files);
        $strIncludeBuffer = "<?php\nAutoLoader::\$_arrIncludeBuffer = ".var_export(self::$_arrIncludeBuffer,true).";\n";
        if (file_put_contents($_tmp_cache,$strIncludeBuffer,LOCK_EX) > 0) {
            rename($_tmp_cache,self::$_cache);
        }
    }

    /**
     * @brief : 找到所有类的声明及所在的文件
     */
    public static function buildClass($files) {
        $classPath = array();
        if (!is_array($files)) {
            return $classPath;
        }
        foreach($files as $file) {
            $tail = substr($file,strlen($file)-4,4);
            if ($tail != ".php" && $tail != ".inc") {
               continue; 
            }
            preg_match_all("/^\s*(?:abstract\s+|final\s+)?(?:class|interface)\s+(\w+)/mi",file_get_contents($file),$matches);
            if (count($matches[0]) == 0) {
                continue;
            }
            foreach($matches[1] as $value) {
                $tmp = trim($value);
                if ($tmp == "") {
                    continue;
                }
                if (isset($classPath[$tmp])) {
                    $old_time = filemtime($classPath[$tmp]);
                    $new_time = filemtime($file);
                    if ($old_time < $new_time) {
                        $classPath[$tmp] = $file;
                    }
                }
                $classPath[$tmp] = $file;
            }
        }
        return $classPath;
    }

    /**
     * @brief : 返回目录下的所有文件
     */
    public static function findAllFile() {
        $files = array();
        $first = 0;
        $last = 1;
        $queue = array(0 => self::getPath());
        while($first < $last) {
            $value = $queue[$first++];
            if (!is_dir($value) && is_file($value)) {
                array_push($files,$value);
            } elseif (is_dir($value)) {
                $arr = scandir($value);
                if ($arr === false || !is_array($arr)) {
                    continue;
                }
                foreach($arr as $v) {
                    if ($v{0} == ".") {
                        continue;
                    }
                    $tmp = $value."/".$v;
                    $queue[$last++] = $tmp;
                }
            }
        }
        return $files;
    }
}


