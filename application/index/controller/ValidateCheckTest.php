<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/11/2 0002
 * Time: 10:57
 */

namespace app\index\controller;

use app\index\validate\User;
use think\Controller;

/**
 * Note: 校验用户信息
 * Class ValidateCheckTest
 * @package app\index\controller
 */
class ValidateCheckTest extends Controller
{
    //是否支持批量验证
    protected $batchValidate = true;
    //验证失败是否抛出异常
    protected $failException = false;

    /**
     * Notes:   前台传数据校验
     * User: reboot
     * Date: 2018/11/2 0002
     * Time: 11:01
     * @param User $user
     * @route('index/checkVali/test')
     */
    public function checkTest(User $user) {
        $data = [
            'name' => 'wzhd',
            'email' => '1574821559@qq.com',
        ];

        if(!$user->check($data)) {
            dump($user->getError());
        }

    }

    /**
     * Notes:   控制器自带方法验证
     * User: reboot
     * Date: 2018/11/2 0002
     * Time: 11:27
     * @route('index/checkVali/selfTest')
     */
    public function selfControllerTest() {
        $result = $this->validate([
            'name' => 'ddddddd',
            'email' => '1574821559@qq.com'
        ], 'app\index\validate\User');

        if(true !== $result) {
            dump($result);
        }
    }

}