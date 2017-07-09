<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/8
 * Time: 20:36
 */

//require_once 'Hello.php';
//
//$h = new Hello();
//$h->sayHello();
//
//$d = new Desktop();
//$d->work();

//require_once 'haoyi/Hello.php';
//require_once 'chenhao/Hello.php';
//
//$h = new \chenhao\Hello();
//$h->sayHello();
//
//$h = new \haoyi\Hello();
//$h->sayHello();

require_once 'Man.php';
//$m = new Man(23,'haoyi');
//echo $m->getAge();
//echo $m->getName();

//Man::sayHello();

//for($i=0;$i<Man::MAX_MAN_NUM;$i++){
//    new Man(23,'haoyi');
//}

$m = new Man(23,'haoyi','');
$m->hi();