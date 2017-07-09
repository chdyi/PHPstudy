<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7
 * Time: 16:22
 */

for ($i=0;$i<100;$i++){
    echo 'Hello'.$i.'<br>';

//    if($i==20){
//        break;
//    }

      if($i==20){
          continue;
      }

    echo 'Run here'.$i.'<br>';
}

//$i=0;
//while ($i<10){
//    echo 'Hello'.$i.'<br>';
//    $i++;
//}

//$i=0;
//do{
//    echo 'Hello'.$i.'<br>';
//    $i++;
//}while($i<10);

