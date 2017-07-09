<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 15:32
 */

$img = imagecreatefromjpeg('cs.jpg');

imagestring($img,5,5,5,'haoyi',imagecolorallocate($img,255,0,0));

header('Content-type:image/png');
imagepng($img);