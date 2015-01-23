<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file MemCacheStrategy.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/23 16:05:07
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class MemCacheStrategy implements ICacheStrategy {
    public function get($key) {
        echo "Read from memory cache\n";
    }
    public function set($key, $value) {
        echo "Write to memory cache\n";
    }
}


