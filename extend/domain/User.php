<?php
/**
 * Created by PhpStorm.
 * User: reboot
 * Date: 2018/10/29 0029
 * Time: 14:23
 */

namespace domain;


class User
{

    public $userName;
    public $userPassword;

    /**
     * 初始化属性
     * User constructor.
     */
    public function __construct()
    {
        $this->userName = '王八';
        $this->userPassword = '123456';
    }

    /**
     * Notes: 获取用户信息
     * User: reboot
     * Date: 2018/10/29 0029
     * Time: 14:23
     */
    public static function getUserInfo() {
        return '自定义的扩展类';
    }
}