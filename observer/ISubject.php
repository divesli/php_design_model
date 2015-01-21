<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file ISubject.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/08 11:43:28
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

interface ISubject {
    public function attach($observer);
    public function detach($observer);
    public function notify();
}


