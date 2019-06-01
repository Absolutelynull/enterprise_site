<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 17:55
 */

namespace app\index\controller;


class Page extends Common
{
    public function index(){
        $cates = db("cate")->find(input('cateid'));
        $this->assign('cates',$cates);
        return view("page");
    }

}