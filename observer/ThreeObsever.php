<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file ThreeObsever.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/08 16:12:14
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class ThreeObserver implements IObserver {
    public function getName() {
        return get_class($this);
    }
    public function update() {
        echo "This is ".$this->getName()." ...\n";
    }
}


