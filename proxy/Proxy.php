<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Proxy.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/17 16:40:09
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class Proxy {
    private $_request = null;

    public function __construct() {
        $this->_request = new RealDoSomething();
    }
    
    public function say() {
        $this->_request->say();
    }
}

class RealDoSomething {
    public function __construct() {
        // TODO
    }

    public function say() {
        echo "This is real request to do something\n";
    }
}
