<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Invoker.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/18 11:14:43
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class Invoker {
    private $_command = null;

    public function __construct() {
        // TODO
    }

    public function setCommand($command) {
        if ($command instanceof ICommand) {
            $this->_command = $command;
        }
    }

    public function executeCommand() {
        $this->_command->execute();
    }
}


