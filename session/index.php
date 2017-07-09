<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 18:29
 */

session_start();
$_SESSION['name'] = 'haoyi';
//echo session_id();

session_destroy();

header('Location:a.php');