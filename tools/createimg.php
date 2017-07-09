<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 15:25
 */

$img = imagecreate(400,300);
imagecolorallocate($img,255,255,255);

imageellipse($img,200,200,50,50,imagecolorallocate($img,255,0,0));

header("Content-type:image/png");
imagepng($img);
