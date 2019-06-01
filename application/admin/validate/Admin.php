<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/9
 * Time: 16:32
 */

namespace app\admin\validate;

use think\Validate;

class Admin extends Validate
{
    protected $rule = [
        'username' => 'require|unique:admin|length:5,20|alphaNum',
        'password' => 'require|length:6,16|alphaDash'
    ];

    protected $message = [
        'username.require' => '用户名不能为空！',
        'username.unique' => '用户名不能重复！',
        'username.length' => '用户名长度必须在5~20位之间！',
        'username.alphaNum' => '用户名只能是有字符+数字组成！',
        'password.require' => '密码不能为空',
        'password.length' => '密码长度必须在6~16位之间！',
        'password.alphaDash' => '密码存在特殊字符',
    ];

    protected $scene = [
        'add'=>['username','password'],
        'edit'=>[
            'username'=>['require','length:5,20','alphaNum'],
            'password'=>['length:6,16','alphaNum'],
        ],
    ];


}