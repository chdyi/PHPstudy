<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7
 * Time: 15:39
 */
function traceHelloPHP(){
    echo 'Hello PHP<br>';
    echo 'Hello World<br>';
}
traceHelloPHP();

//$func = 'traceHelloPHP';
//$func();

function  sayHelloTo($name){
    echo 'Hello '.$name.'<br>';
}
sayHelloTo('ZhangSan');
sayHelloTo('Lisi');

function traceNum($a,$b){
//    echo 'a='.$a.',b='.$b.'<br>';
    echo"a=$a ,b=$b <br>";
}

traceNum(2,3);

function add($a,$b){
    return $a+$b;
}
echo add(10,6);