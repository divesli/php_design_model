<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file ICommand.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/18 11:13:22
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

interface ICommand {
    public function setRecevier($recevier);
    public function removeRecevier($recevier);
    public function execute();
}



