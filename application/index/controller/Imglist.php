<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/28
 * Time: 10:55
 */

namespace app\index\controller;

use app\index\model\Article as ArticleModel;

class Imglist extends Common
{
    public function index()
    {
        $article = new ArticleModel();
        $artRes = $article->getAllArticle(input('cateid'),3);

        $this->assign([
            'artRes'=>$artRes
        ]);
//        dump($artRes);die;
        return view("imglist");
    }

}