<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file OnCommand.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/18 11:42:46
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class OnCommand implements ICommand {
    private $_arrReceviers = array();

    public function setRecevier($recevier) {
        if ($recevier instanceof IRecevier) {
            $name = $recevier->getName();
            $this->_arrReceviers[$name] = $recevier;
        }
    }
    
    public function removeRecevier($recevier) {
        if ($recevier instanceof IRecevier) {
            $name = $recevier->getName();
            unset($this->_arrReceviers[$name]);
        }
    }
    public function execute() {
        foreach($this->_arrReceviers as $recevier) {
            $recevier->start();
        }
    }
}


