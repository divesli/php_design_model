<?php
/***************************************************************************
 * 
 * Copyright (c) 2014 xxx.cn, Inc. All Rights Reserved
 * $Id$ 
 * 
 **************************************************************************/
 
 
/**
 * @file Test.php
 * @author divesli(divesli@xxx.cn)
 * @date 2014/12/16 10:49:10
 * @version $Revision$ 
 * @filecoding UTF-8 
 * @brief 
 *  
 */

include_once("AutoLoader.php");

// Singleton
$s = Singleton::instance();
$s->say();

// Factory
$f = new ProductFactory();
$p = $f->factory();
$p->say();

// Iterator
$arrData = array(12,29,34,46);
$c = new Collection($arrData);
foreach ($c as $k => $v) {
    echo "k = ".$k.",v = ".$v."\n";
}

$pc = new PrvIterator();
foreach($pc as $k => $v) {
    echo "k = ".$k.",v = ".$v."\n";
}

// Proxy
$proxy = new Proxy();
$proxy->say();


// Command
$tv_recevier = new TVRecevier();
$mv_recevier = new MVRecevier();
$on = new OnCommand();
$on->setRecevier($tv_recevier);
$on->setRecevier($mv_recevier);

$off = new OffCommand();
$off->setRecevier($tv_recevier);
$off->setRecevier($mv_recevier);

$on_invoker = new Invoker();
$on_invoker->setCommand($on);
$on_invoker->executeCommand();

$off_invoker = new Invoker();
$off_invoker->setCommand($off);
$off_invoker->executeCommand();

// Chain
$chain = new HandlerChain();
$onehandler = new OneHandler();
$twohandler = new TwoHandler();

$chain->addHandler($onehandler);
$chain->addHandler($twohandler);

$onerequest = new OneRequest();
$tworequest = new TwoRequest();

$chain->handlerRequest($onerequest);
$chain->handlerRequest($tworequest);

// Observer
$s = new ConcreteSubject();

$o1 = new OneObserver();
$o2 = new TwoObserver();
$o3 = new ThreeObserver();

$s->attach($o1);
$s->attach($o2);
$s->attach($o3);

$s->run();


$pb = new ProductBuilder();
$pb->builder();
$product = $pb->getProduct();
$product->say();
