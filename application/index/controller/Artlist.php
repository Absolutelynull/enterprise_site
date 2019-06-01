<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/26
 * Time: 11:19
 */

namespace app\index\controller;

use app\index\model\Article as ArticleModel;

class Artlist extends Common
{
    public function index(){
        $article = new ArticleModel();
        $artRes = $article->getAllArticle(input('cateid'));
        $hotRes = $article->getHorRes(input('cateid'));

        $cate =new \app\index\model\Cate();
        $posAll = $cate->getparents(input('cateid'));

        $this->assign('artRes',$artRes);
        $this->assign('hotRes',$hotRes);
        $this->assign('posAll',$posAll);

        return view('artlist');
    }

}