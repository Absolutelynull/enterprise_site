<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 10:55
 */

namespace app\index\controller;


class Article extends Common
{
    public function index()
    {
        $artid = input('artid');
        $article = db('article')->find($artid);
        $articles = new \app\index\model\Article();
        $hotRes = $articles->getHorRes($article['cateid']);
        db('article')->where(['id'=>$artid])->setInc('click');
        $this->assign('article',$article);
        $this->assign('hotRes',$hotRes);
        return view("article");
    }


}