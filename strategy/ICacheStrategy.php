<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file ICacheStrategy.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/23 15:57:29
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

interface ICacheStrategy {
    public function get($key);
    public function set($key, $value);
}


