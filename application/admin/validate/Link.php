<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/17
 * Time: 16:08
 */

namespace app\admin\validate;


use think\Validate;

class Link extends Validate
{
    protected $rule = [
        'title' => 'require|max:50|unique:link',
        'url' => 'require|url',
        'desc' => 'require',
    ];
    protected $message = [
        'title.require' => '链接标题不能为空',
        'title.max' => '链接标题不能大于50位',
        'title.unique' => '链接标题不能重复',
        'url.require' => 'URL网址不能为空',
        'url.url' => 'URL网址不正确',
        'desc.require' => '描述不能为空',
    ];

    protected $scene = [
        'add'=>['title','url','desc'],
        'edit'=>['title','url','desc'],
    ];
}