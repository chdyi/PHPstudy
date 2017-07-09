<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 14:39
 */

//write data

//$f = @fopen('data','w');
//if($f){
//    fwrite($f,'Hello haoyi');
//    fclose($f);
//
//    echo 'OK';
//}else{
//    echo '创建文件失败';
//}

//read data

//$f = @fopen('data','r');
//
//while(!feof($f)){
//    $content = fgets($f);
//    echo $content;
//}
//
//fclose($f);

//get content
echo file_get_contents('data');