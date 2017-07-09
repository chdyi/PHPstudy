<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 14:18
 */

//JSON format
//[1,3,9,1,0,2,"Hello",[2,4,8],{"h":"Hello"}]
//{"h":"Hello","w":"World" ,[2,4,8]}


//encode >>>>>>>>>>>>>>>>>>>>>>
//$arr = array(1,3,9,1,"Hello","haoyi",array("h"=>"Hello","w"=>"World"));
//print_r($arr);
//echo json_encode($arr);


//$obj = array('h'=>'Hello','w'=>'World',array(2,4,8));
//echo json_encode($obj);


//decode
$jsonStr = '{"h":"Hello","w":"World","0":[2,4,8]}';
$obj = json_decode($jsonStr);
//print_r($obj);
echo $obj->h;