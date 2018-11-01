<?php

namespace app\http\middleware;

/**
 * Note: tp5.1后置中间件
 * Class After
 * @package app\http\middleware
 */
class After
{
    public function handle($request, \Closure $next)
    {
        $response = $next($request);

        //执行中间件代码

        return $response;
    }
}
