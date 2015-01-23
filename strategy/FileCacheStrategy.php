<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file FileCacheStrategy.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/23 16:01:48
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class FileCacheStrategy implements ICacheStrategy {
    public function get($key) {
        echo "Read from file cache\n";
    }
    public function set($key, $value) {
        echo "Write to file cache\n";
    }
}


