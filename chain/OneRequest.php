<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file OneRequest.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/29 17:41:44
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class OneRequest implements IRequest {
    public function getType() {
        return 1;
    }
}


