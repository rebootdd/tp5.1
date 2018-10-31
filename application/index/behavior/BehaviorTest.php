<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/31 0031
 * Time: 11:10
 */

namespace app\index\behavior;

/**
 * Note: 若是该行为类中只有一个行为，只需要定义一个行为入口方法`run`即可
 * Class BehaviorTest
 * @package app\index\behavior
 *
 */
class BehaviorTest
{

    /**
     * Notes:  当该行为类被绑定到钩子的时候，run行为方法则会在该钩子被触发的时候执行
     *         默认的方法名是run
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 11:10
     * @param $params
     * @return string
     */
//    public function run($params) {
//        dump($params);
//        echo '行为入口方法!<br>';
//    }

    /**
     * Notes:   自己定义的行为入口方法
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 16:53
     * @param $params
     */
    public function myDefineRun($params) {
        dump($params);
        echo '行为入口方法!<br>';
    }

    /**
     * Notes:   行为类其他行为方法
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 16:54
     * @param $params
     */
    public function myBehavior($params) {
        dump($params);
        echo '我是一个行为类中的其他方法，让我执行一次';
    }

    /**
     * Notes:   应用初始化标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:17
     */
//    public function appInit() {
//        echo '应用初始化标签位<br>';
//    }

    /**
     * Notes:   应用调度标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:18
     */
//    public function appDispatch() {
//        echo '应用调度标签位<br>';
//    }

    /**
     * Notes:   应用开始标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:28
     */
//    public function appBegin() {
//        echo '应用开始标签位<br>';
//    }

    /**
     * Notes: 应用初始化标签位(钩子)
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 11:14
     * @param $params
     */
//    public function actionBegin($params) {
//        echo '控制器开始标签位<br>';
//    }

    /**
     * Notes: 模板初始化标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:15
     */
//    public function moduleInit() {
//        echo '模板初始化标签位<br>';
//    }

    /**
     * Notes:   视图输出过滤标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:19
     */
//    public function filter() {
//        echo '视图输出过滤标签位<br>';
//    }

    /**
     * Notes:  应用结束标签位(钩子)
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 11:13
     */
//    public function appEnd() {
//        echo '应用结束标签位<br>';
//    }

    /**
     * Notes:   日志write方法标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:21
     * @param $params
     */
//    public function logWrite($params) {
//        echo '日志write方法标签位<br>';
//    }

    /**
     * Notes: 日志写入标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:22
     * @param $params
     */
//    public function logLevel($params) {
//        echo '日志写入标签位<br>';
//    }

    /**
     * Notes: 响应发送标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:23
     * @param $params
     */
//    public function reponseSend($params) {
//        echo '响应发送标签位<br>';
//    }

    /**
     * Notes:   输出结束标签位
     * User: reboot
     * Date: 2018/10/31 0031
     * Time: 14:24
     * @param $params
     */
//    public function reponseEnd($params) {
//        echo '输出结束标签位<br>';
//    }

}