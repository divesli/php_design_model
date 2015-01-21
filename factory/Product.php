<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Product.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/15 18:05:06
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

interface IProduct {
    public function say();
}


class Product1 implements IProduct {
    public function say() {
        echo "This product1\n";
    }
}
