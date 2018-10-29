<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29 0029
 * Time: 17:27
 */

namespace domain;


class Duck implements Animal
{
    public function eat()
    {
        return "我吃稻谷";
    }

    public function run()
    {
        return "我游泳";
    }

}