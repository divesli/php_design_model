<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file ConcreteSubject.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/08 15:33:43
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class ConcreteSubject implements ISubject {
    private $_arrObservers = array();
    public function attach($observer) {
        if ($observer instanceof IObserver) {
            $key = $observer->getName();
            $this->_arrObservers[$key] = $observer;
        }
    }

    public function detach($observer) {
        if ($observer instanceof IObserver) {
            $key = $observer->getName();
            unset($this->_arrObservers[$key]);
        }
    }

    public function notify() {
        foreach($this->_arrObservers as $observer) {
            if ($observer instanceof IObserver) {
                $observer->update();
            }
        }
    }

    public function run() {
        $this->notify();
    }
}


