<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file HandlerChain.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/29 17:44:38
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class HandlerChain {
    private $_handlers = array();

    public function addHandler($handler) {
        if ($handler instanceof IHandler) {
            $this->_handlers[] = $handler;
        }
    }

    public function handlerRequest($request) {
        foreach($this->_handlers as $handler) {
            if ($handler->handlerExec($request)) {
                return ;
            }
        }
    }
}


