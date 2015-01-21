<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file ProductBuilder.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/20 14:45:13
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class ProductBuilder {
    protected $pro = null;

    public function builder() {
        $this->pro = new Product();
        $this->pro->setName("XXX_PRODUCT");
        $this->pro->setAge(12);
        $this->pro->setColor("red");
    }

    public function getProduct() {
        return $this->pro;
    }
}


