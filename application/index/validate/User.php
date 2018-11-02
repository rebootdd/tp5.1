<?php

namespace app\index\validate;

use think\Validate;

/**
 * Note: 属性定义验证规则
 * Class User
 * @package app\index\validate
 */
class User extends Validate
{
    /**
     * 定义验证规则
     * 格式：'字段名'	=>	['规则1','规则2'...]
     *
     * @var array
     */	
	protected $rule = [
        'name'  => 'require|max:5',
        'age'   => 'number|between:1,120',
        'email' => 'email',
    ];
    
    /**
     * 定义错误信息
     * 格式：'字段名.规则名'	=>	'错误信息'
     *
     * @var array
     */	
    protected $message = [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过5个字符',
        'age.number'   => '年龄必须是数字',
        'age.between'  => '年龄只能在1-120之间',
        'email'        => '邮箱格式错误',
    ];
}
