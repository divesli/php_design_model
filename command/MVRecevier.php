<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file MVRecevier.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/18 11:37:10
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class MVRecevier implements IRecevier {
    public function getName() {
        return "MV";
    }
    public function start() {
        echo "MV start ...\n";
    }
    public function stop() {
        echo "MV stop ...\n";
    }
}


