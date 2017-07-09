<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/8
 * Time: 21:39
 */

require_once  'Peolpe.php';

class Man extends Peolpe
{
    public  function  __construct($age, $name, $sex)
    {
        parent::__construct($age, $name, $sex);
    }

    public  function  hi(){
        echo 'Man '.$this->getName().' say hi';
    }
}