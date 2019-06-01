<?php

namespace app\index\controller;


class Index extends Common
{
    public function index()
    {

        $article = new \app\index\model\Article();
        /* 新文章*/
        $newArticles = $article->getNewArticle();
        /*获取右侧热点文章*/
        $hotArticles = $article->getHotArticle();
        /*友情链接*/
        $links = db('link')->field('title,url')->select();

        /*首页推荐文章*/
        $index_articles = $article->field('id,title,pic')->where('index_rec','1')->order('id')->limit(4)->select();

        /*获取栏目推荐*/
        $cate = new \app\index\model\Cate();
        $cateRec = $cate->getCateRec();




//        dump($index_articles);die;
        $this->assign([
            'newArticles' => $newArticles,
            'hotArticles' => $hotArticles,
            'links' => $links,
            'index_articles' => $index_articles,
            'cateRecs' => $cateRec,
        ]);
        return $this->fetch();

    }
}
