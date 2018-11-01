<?php

namespace app\http\middleware;

/**
 * Note: tp5.1前置中间件
 * Class Before
 * @package app\http\middleware
 */
class Before
{
    public function handle($request, \Closure $next)
    {
        //中间件执行代码

        return $next($request);
    }
}
