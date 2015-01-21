<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file PrvIterator.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/16 16:00:56
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class PrvIterator implements Iterator {
    private $_data = array(23,35,11,343,546);
    private $_index = 0;
    public function __construct() {
        // TODO
    }

    public function rewind() {
        $this->_index = 0;
    }

    public function current() {
        return $this->_data[$this->_index];
    }
    
    public function key() {
        return $this->_index;
    }

    public function next() {
        $this->_index++;
    }

    public function valid() {
        return isset($this->_data[$this->_index]);
    }
}


