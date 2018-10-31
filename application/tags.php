<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用行为扩展定义文件
return [
    // 应用初始化
    'app_init'     => [
//        'app\index\behavior\BehaviorTest'
    ],
    // 应用开始
    'app_begin'    => [
//        'app\index\behavior\BehaviorTest'
    ],
    // 模块初始化
    'module_init'  => [
//        'app\index\behavior\BehaviorTest'
    ],
    // 操作开始执行
    'action_begin' => [
//        'app\index\behavior\BehaviorTest'
    ],
    // 视图内容过滤
    'view_filter'  => [
//        'app\index\behavior\BehaviorTest'
    ],
    // 日志写入
    'log_write'    => [
//        'app\index\behavior\BehaviorTest'
    ],
    // 应用结束
    'app_end'      => [
//        'app\index\behavior\BehaviorTest'
    ],

    //自定义钩子
    'behavior_test' => [
        'app\index\behavior\BehaviorTest'
    ],
];
