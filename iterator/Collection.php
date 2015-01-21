<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Collection.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/16 15:07:46
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class Collection implements Iterator{
    private $_data = null;
    private $_index = 0;
    public function __construct($data) {
        $this->_data = $data;
    }
    
    public function rewind() {
        $this->_index = 0;
    }

    public function valid() {
        return isset($this->_data[$this->_index]);
    }

    public function current() {
        return $this->_data[$this->_index];
    }
    
    public function key() {
        return $this->_index;
    }

    public function next() {
        return $this->_index++;
    }
}


