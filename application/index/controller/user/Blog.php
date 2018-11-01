<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/1 0001
 * Time: 13:36
 */

namespace app\index\controller\user;

use think\Controller;
/**
 * Note: 多级控制器
 * Class Blog
 * @package app\index\controller\user
 */
class Blog extends Controller
{

    public function initialize()
    {
        parent::initialize();

        echo '我只是控制中的最先初始化！<br>';
    }

    /**
     * Notes:   多级控制器下的测试
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 13:38
     * @route('index/user/test')
     *
     */
    public function test() {
        return '我是多级控制器下的测试方法！';
    }

}