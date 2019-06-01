<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/6/1
 * Time: 15:50
 */

namespace app\index\controller;


class Search extends Common
{

    public function index(){
        $article = new \app\index\model\Article();
        $kw = input('kw');/*关键字*/
        //8,false,['query'=>request()->param() ]  带参数传参 进行分页
        $articles = $article->where('title','like','%'.$kw.'%')->paginate(2,false,
            [
            'query'=>request()->param(),
            ]);

        $this->assign([
            'articles'=>$articles,
            'kw'=>$kw,
        ]);
//        dump($articles);die;
        return view();


    }

}