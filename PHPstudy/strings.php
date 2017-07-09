<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7
 * Time: 16:41
 */

$str = 'Hello PHP Java C# C++';
//echo $str;

//echo strpos($str,'PH');

$str1 = substr($str,2);
echo $str1;

//$result = str_split($str,2);
//print_r($result);

//$result =explode(' ',$str);
//print_r($result);

$num = 100;

//$str2 = $str.'<br>objective-C'.$num;
//echo $str2;

$str2 = "$str<br>Objective-C $num";
echo $str2;
