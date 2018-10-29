<?php
namespace app\index\controller;

use \think\facade\Env;
use \domain\User;
use \my\NotSysDefineClass;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
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

}
