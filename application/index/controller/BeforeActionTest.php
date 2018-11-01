<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 13:49
 */

namespace app\index\controller;

use think\Controller;

/**
 * Note: 前置操作()
 * Class BeforeActionTest
 * @package app\index\controller
 */
class BeforeActionTest extends Controller
{
    //前置操作数组
    protected $beforeActionList = [
        'first',
        'second' =>  ['except'=>'hello'],
        'three'  =>  ['only'=>'hello,data'],
    ];

    protected function first()
    {
        echo 'first<br/>';
    }

    protected function second()
    {
        echo 'second<br/>';
    }

    protected function three()
    {
        echo 'three<br/>';
    }

    /**
     * Notes:   前置操作测试
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 13:52
     * @return string
     * @route('index/hello')
     *
     */
    public function hello()
    {
        return 'hello';
    }

    /**
     * Notes:   前置操作测试
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 13:53
     * @return string
     * @route('index/data')
     */
    public function data()
    {
        return 'data';
    }

}