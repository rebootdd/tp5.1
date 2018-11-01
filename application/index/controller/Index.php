<?php
namespace app\index\controller;

use think\Controller;
use \think\facade\Env;

class Index extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    /**
     * Notes: 获取环境变量
     * User: reboot
     * Date: 2018/10/23 0023
     * Time: 15:39
     */
    public function getDataBase()
    {
        $username = Env::get('database.username');
        $password = Env::get('database.password');

        echo config('config.salt') . '<br>';

        return 'username:' . $username . '; password:' . $password ;
    }

    /**
     * Notes: 使用注解路由(在app.php中开启支持注解路由)
     * User: reboot
     * Date: 2018/10/23 0023
     * Time: 16:05
     * @param $name
     * @return string
     * @route('nba/:name')
     */
    public function getRoot($name) {
        print_r('<pre>');
        //应用根目录
        print_r('应用根目录: ' . Env::get('root_path') . '<br>');
        //应用目录
        print_r('应用目录: ' . Env::get('app_path') . '<br>');
        //框架目录
        print_r('框架目录: ' . Env::get('think_path') . '<br>');
        //配置目录
        print_r('配置目录: ' . Env::get('config_path') . '<br>');
        //扩展目录
        print_r('扩展目录: ' . Env::get('extend_path') . '<br>');
        //composer目录
        print_r('composer目录: ' . Env::get('vendor_path') . '<br>');
        //运行缓存目录
        print_r('运行缓存目录: ' . Env::get('runtime_path') . '<br>');
        //路由目录
        print_r('路由目录: ' . Env::get('route_path') . '<br>');
        //当前模块目录
        print_r('当前模块目录: ' . Env::get('module_path') . '<br>');

        return 'hello, ' . $name;
    }

    /**
     * Notes: 用户注册
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 14:17
     * @route('index/registe', 'post')
     */
    public function registe() {

    }

    /**
     * Notes:   用户登录
     * User: reboot
     * Date: 2018/11/1 0001
     * Time: 14:18
     * @route('index/login')
     */
    public function login() {

    }
}
