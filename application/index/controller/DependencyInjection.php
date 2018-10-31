<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29 0029
 * Time: 16:40
 */

namespace app\index\controller;

use domain\User;
use domain\Animal;
use app\facade\Test;
use think\facade;

class DependencyInjection
{

    /**
     * Notes:   获取自定义extend目录下的扩展类
     * User: reboot
     * Date: 2018/10/29 0029
     * Time: 14:26
     * @route('userInfo')
     */
    public function testDefineSelfClass() {
        $user = new User();

        return $user->getUserInfo();

    }

    /**
     * Notes:   获取自定义非系统默认extend下的扩展类
     * User: reboot
     * Date: 2018/10/29 0029
     * Time: 14:37
     * @route('self')
     */
    public function getDefineSelfClass() {
        $notSysDefineClass = new NotSysDefineClass();

        return $notSysDefineClass->test();
    }

    /**
     * Notes:   依赖注入的类统一由容器进行管理，大多数情况下是自动绑定并且实例化
     * User: reboot
     * Date: 2018/10/29 0029
     * Time: 16:28
     * @param User $user
     * @return string
     * @route('info')
     */
    public function getUserInfo(User $user) {
        return '用户名: ' . $user->userName . '; 密码: ' . $user->userPassword;
    }

    /**
     * Notes: 手动绑定
     * User: reboot
     * Date: 2018/10/29 0029
     * Time: 16:33
     * @route('bind')
     */
    public function operateBindContainer() {
        //1.绑定类标识
        bind('user', 'domain\User');

//        object(domain\User)#43 (2) {
//            ["userName"] => string(6) "王八"
//            ["userPassword"] => string(6) "123456"
//        }
//        每次调用接口，输出的实例化对象app('user')都是同一个
//        dump(app('user'));

//        dump(app('user', true));

        echo app('user', true)->getUserInfo() . '<br>';

//        bind('user4', '\domain\User');
//        dump(app('user4'));
//
//        var_dump(app('user4', true));

        //2.绑定闭包
        bind('sayHello', function($name) {
           return 'hello,thinkphp and ' . $name . '<br>';
        });

        echo app('sayHello',['okc']);

        //3.绑定类的实例
        $user = new User();
        bind('user1', $user);

        echo '用户名: ' . app('user1')->userName . '; 密码: ' . app('user1')->userPassword . '<br>';

        //4.绑定置接口实现
        //echo $ani->eat();
    }

    /**
     * Notes: 绑定接口到实现类
     * User: reboot
     * Date: 2018/10/29 0029
     * Time: 17:47
     * @param Animal $animal
     * @route('ani')
     */
    public function getInstance(Animal $animal) {
        return $animal->eat();
    }

    /**
     * Notes: 使用门面facade来静态调用方法
     * User: reboot
     * Date: 2018/10/30 0030
     * Time: 11:33
     * @route('test')
     */
    public function testFacade() {
        //使用静态方法进行绑定
//        return Test::hello();

        //使用的时候动态绑定
        Facade::bind('app\facade\Test', 'domain\Test');
        return Test::hello();
    }
}