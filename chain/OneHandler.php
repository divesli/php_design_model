<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file OneHandler.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/29 17:34:07
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class OneHandler implements IHandler {
    const TYPE = 1;
    public function handlerExec($request) {
        if (!($request instanceof IRequest)) {
            return false;
        }
        if ($request->getType() == self::TYPE) {
            echo "This OneHandler executing...\n"; 
            return true;
        }
    }
}


