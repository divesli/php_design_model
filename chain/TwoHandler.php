<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file TwoHandler.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/29 17:34:07
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class TwoHandler implements IHandler {
    const TYPE = 2;
    public function handlerExec($request) {
        if (!($request instanceof IRequest)) {
            return false;
        }
        if ($request->getType() == self::TYPE) {
            echo "This TwoHandler executing...\n"; 
            return false;
        }
    }
}


