<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Factory.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/15 17:57:47
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

interface IFactory {
    public function factory();
}
class ProductFactory implements IFactory{

    public function __construct() {
        // TODO
    }

    public function factory() {
        return new Product1();
    }
}


