<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 15:55
 */

if(isset($_GET['name'])&&$_GET['name']){
    echo 'Hello'.$_GET['name'];
}else{
    echo'请输入你的名字';
}