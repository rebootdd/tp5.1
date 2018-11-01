<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 13:20
 */

namespace app\admin\controller;


class Index
{

    /**
     * Notes:   admin某块下的test操作
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 13:21
     * @return string
     * @route('admin/test')
     */
    public function test() {
        return '我是一个admin模块！';
    }

    /**
     * Notes:   测试路由是否需要加上控制器
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 13:27
     * @route('admin/base')
     */
    public function getDataBase() {
        return '我是admin模块下获取数据';
    }

}