<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 16:01
 */


if($_POST['a']&&$_POST['b']){
    echo  $_POST['a']+$_POST['b'];
}else{
    echo  '请输入数值';
}