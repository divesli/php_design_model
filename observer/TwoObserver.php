<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file TwoObserver.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/08 15:52:18
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class TwoObserver implements IObserver {
    public function getName() {
        return get_class($this);
    }
    public function update() {
        echo "This is ".$this->getName()." ...\n";
    }
}


