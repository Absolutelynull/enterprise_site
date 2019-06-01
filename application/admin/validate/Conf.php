<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/19
 * Time: 17:32
 */

namespace app\admin\validate;


use think\Validate;

class Conf extends Validate
{
    protected $rule = [
        'cname'=>'require',
        'ename'=>'require|alpha',
        'type'=>'number|max:1',
    ];
    protected $message = [
        'cname.require'=>'中文名称不能为空',
        'ename.require'=>'英文名称不能为空',
        'ename.alpha'=>'英文名称只能是字母组成',
        'type.number'=>'配置类型错误',
        'type.max'=>'配置类型错误',
    ];

}