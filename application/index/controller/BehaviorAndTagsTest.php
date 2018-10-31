<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/31 0031
 * Time: 13:31
 */

namespace app\index\controller;

use think\facade\Hook;
use think\facade\Log;

class BehaviorAndTagsTest
{

    public function __construct()
    {
        //行为绑定到钩子应该在钩子位置点的前面就行
        Hook::add('app_init', function($params) {
            dump($params);
        });
    }


    /**
     * Notes:   行为动态绑定
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 15:26
     * @route('behavior/activeTest')
     */
    public function activeTest() {
        # 动态绑定是通过函数Hook::add()完成的，但新手容易出现的问题是，这个函数要写在哪里，
        # 其实手册前面已经说过了，行为绑定一定要在钩子被触发之前，也就是要写在你所
        # 要绑定的钩子位置点之前，只不过新手刚接触很容易忽略这点。

        //行为绑定到钩子，并不需要在同一个函数，只要保证在所绑定的钩子位置点前面就行了
//        Hook::add('test', 'app\index\behavior\BehaviorTest');
        //钩子的位置点
//        Hook::listen('test');
    }

    /**
     * Notes:   静态绑定
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 13:36
     * @route('behavior/test')
     */
    public function test() {
        //向日志中写入信息
//        Log::write('这是我的行为测试');
        Hook::listen('behavior_test', 'aaa');
        return '行为测试';
    }

    /**
     * Notes:   行为的闭包支持
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 16:43
     * @route('behavior/closePackage')
     */
    public function test1() {

        Hook::listen('app_init', '闭包支持成功了没？');

        return '行为闭包支持测试';
    }


    /**
     * Notes:   直接执行行为
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 16:49
     * @route('behavior/runBehavior')
     */
    public function test2() {
        //执行行为类中的入口方法,默认执行
//        echo Hook::exec('app\index\behavior\BehaviorTest', '直接执行行为就是这么搞？');

        //执行行为类中的其他方法
        echo Hook::exec(['app\index\behavior\BehaviorTest', 'myBehavior'], '行为的其他方法，呵呵');
    }


}