<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Product.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/20 14:38:44
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class Product {
    private $_name  = null;
    private $_age   = null;
    private $_color = null;
    public function setName($name) {
        $this->_name = $name;
    }
    public function setAge($age) {
        $this->_age = $age;
    }
    public function setColor($color) {
        $this->_color = $color;
    }
    public function say() {
        echo "This product name is ".$this->_name.", age is ".$this->_age.", color is ".$this->_color."\n";
    }
}


