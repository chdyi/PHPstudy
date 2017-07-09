<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/8
 * Time: 20:53
 */
class Man
{
    /**
     * Man constructor.
     * @param int $age   这个人的年龄
     * @param string $name  这个人的名字
     */
    public  function  __construct($age,$name)
    {
//        echo 'Construct a man';

        $this->_age = $age;
        $this->_name = $name;
        //记录下来这2个变量;

        
        if(Man::$NUM>Man::MAX_MAN_NUM){
            throw  new Exception("不能创建更多的人");
        }
    }

    public function getAge()
    {
        return $this->_age.'<br>';
    }

    public function getName()
    {
        return $this->_name;
    }

    private $_age,$_name;

    public static $NUM = 100;

    const  MAX_MAN_NUM = 200;

    public static function  sayHello(){
        echo 'Hello haoyi';
    }
}