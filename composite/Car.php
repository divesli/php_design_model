<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Car.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/24 10:53:25
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class Car {
    private $_arrParts = array();

    public function setParts($parts) {
        $this->_arrParts[] = $parts;
    }

    public function run() {

    }
}



