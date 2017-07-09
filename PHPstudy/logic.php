<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/7
 * Time: 16:34
 */

function traceNum(){
    for($i=0;$i<=100;$i++){

//        if($i%2==0 && $i%3==0){
//           echo $i.'<br>';
//        }

//        if($i%2==0 || $i%3==0){
//           echo $i.'<br>';
//        }

//        if($i%2 !== 0){
//            echo $i.'<br>';
//        }

        if(!($i%2 == 0)){
            echo $i.'<br>';
        }
    }
}

traceNum();