<?php
namespace app\index\controller;

use think\facade\Request;

/**
 * Note: 中间件测试(中间件主要用于拦截或者过滤应用的http请求)
 * User: reboot
 * Date: 2018/10/31 0031
 * Time: 17:11
 */
class MiddleWareTest
{

    /**
     * Notes: 测试中间件拦截
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 17:13
     * @route('middle/test')
     *  ->middleware('Check')
     *
     */
    public function test() {
        return '我只是一个测试中间件的方法';
    }



}