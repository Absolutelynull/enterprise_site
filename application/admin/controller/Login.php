<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/12
 * Time: 15:08
 */

namespace app\admin\controller;


use think\Controller;

use app\admin\model\Admin as admiModel;

class Login extends Controller
{
    public function index()
    {



        $admin = new admiModel;
        if (request()->isPost()) {
            //验证码验证
            $code = input('post.code');
            if (!captcha_check($code)) {
                $this->error('验证码不正确，请重新输入！','index');
                die;
            };

            $result = $admin->login(input('post.'));
            if ($result === 1) {
                $this->success('登录成功!正在为您跳转页面!', 'index/index');
            } else {
                $this->error('登录失败,请检查账号或密码是否正确');
            }
        }
        return $this->fetch("login");
    }

    public function logout()
    {
        session(null);
        $this->success('成功退出账号!', 'login/index');
        exit;
    }


}