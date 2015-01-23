<?php
/***************************************************************************
 * 
 * Copyright (c) 2015 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file StrategyProduct.php
 * @author divesli(divesli@xxx.cn)
 * @date 2015/01/23 16:09:33
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

class StrategyProduct {
    protected $cache = null;
    public static function model() {
        return new self();
    }
    public function setCache($cache) {
        if ($cache instanceof ICacheStrategy) {
            $this->cache = $cache;
        }
    }
    public function getCache() {
        return $this->cache;
    }
}


