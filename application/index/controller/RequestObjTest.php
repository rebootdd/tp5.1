<?php

namespace app\index\controller;

use think\Controller;
use think\facade\Request;
/**
 * Note: 获取request对象
 * Class RequestObjTest
 * @package app\index\controller
 */
class RequestObjTest extends Controller
{

    /**
     * Notes:   检测变量是否存在
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 16:18
     * @return string
     * @route('index/checkV')
     *
     */
    public function checkVailiable() {
        $flag = Request::has('name', 'get');
        return $flag ? '存在' : '不存在';
    }

    /**
     * Notes:   获取变量参数
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 16:30
     * @return string
     * @route('index/getName')
     *
     */
    public function getAllParams() {
        //请求方式1: http://localhost:8091/index/getName/name/wzhd      输出name值为wzhd
        //请求方式2: htpp://localhost:8091/index/getName/okc/kok/name/wzhd/name/wwww        输出name值为wwww
        //请求方式3: http://localhost:8091/index/getName?name=wzhd      输出name值为wzhd
        //获取变量name的值
        $name = Request::param('name','reboot', 'trim');
        //获取当前请求的所有变量(经过过滤)
        $params = Request::param();
        dump($params);
        //获取当前请求的所有变量(原始数据)
        $params = Request::param(false);
        dump($params);
        //获取当前请求的所有变量(包含上传文件)
        $params = Request::param(true);
        dump($params);
        return $name;
    }

    /**
     * Notes:   获取部分变量
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 16:50
     * @route('index/getpart')
     *
     */
    public function getPartParams() {
        //字符串方式
        $params = Request::only('name,id');
        dump($params);
        //数组方式
        $params = Request::only(['name', 'id', 'a']);
        dump($params);
        //排除某些变量
        $params = Request::except('name');
        dump($params);
    }

    /**
     * Notes:   通过助手函数完成绝大部分工作
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 16:55
     * @route('index/helper', 'get')
     */
    public function getParamsByHelper() {

        //助手函数input()

        //判断是否存在变量
        $name = input('?param.name');

        dump($name);

    }
}