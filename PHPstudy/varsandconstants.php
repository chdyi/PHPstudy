<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7
 * Time: 15:56
 */

$a = 10;
$a = 20;
$b = 6;
echo $a+$b;

echo '<br>';

//const THE_VALUE = 100;
////const THE_VALUE = 120;  //不允许多次赋值常量;
//echo THE_VALUE;

define('THE_VALUE',200);
echo THE_VALUE;