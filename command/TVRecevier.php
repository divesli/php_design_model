<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file TVRecevier.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/18 11:37:10
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class TVRecevier implements IRecevier {
    public function getName() {
        return "TV";
    }
    public function start() {
        echo "TV start ...\n";
    }
    public function stop() {
        echo "TV stop ...\n";
    }
}


