<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Singleton.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/15 17:42:48
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class Singleton {
    private static $_instance = null;
    
    private function __construct() {
        // TODO
    }

    public static function instance() {
        if (self::$_instance == null) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __clone() {
        // TODO
    }

    private function __sleep() {
        // TODO
    }
    
    public function say() {
        echo "This is singleton module\n";
    }
}


