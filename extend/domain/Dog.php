<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29 0029
 * Time: 17:25
 */

namespace domain;


class Dog implements Animal
{
    public function eat()
    {
        return "我吃狗粮";
    }

    public function run()
    {
        return "我用腿走路";
    }

}