<?php

namespace app\http\middleware;

/**
 * Note: 命令php think make:middleware Check创建的中间件
 * User: reboot
 * Class Check
 * @package app\http\middleware
 */
class Check
{

    /**
     * Notes:   中间件的入口方法，并且必须是handle
     *      1.中间件的返回值必须是一个response对象
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 17:20
     * @param $request      Request对象
     * @param \Closure $next    一个闭包
     * @return mixed|\think\response\Redirect
     */
    public function handle($request, \Closure $next)
    {
//        if($request->param('name') == 'think') {
//            return redirect('/userInfo');
//        }

        $request->name = 'REBOOT';

        return $next($request);

    }

}
