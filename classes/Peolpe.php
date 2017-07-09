<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/8
 * Time: 21:33
 */
class Peolpe
{
    /**
     * Peolpe constructor.
     * @param $age
     * @param $name
     * @param $sex
     */
    public  function  __construct($age,$name,$sex)
    {
        $this->_age =$age;
        $this->_name =$name;
        $this->_sex =$sex;
    }
    public function getAge()
    {
        return $this->_age;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function setSex($sex)
    {
        $this->_sex = $sex;
    } 
    public function  hi(){
        echo $this->_name.'say hi';
    }
}