<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/26
 * Time: 11:27
 */

namespace app\index\model;

use app\index\model\Cate as cateModel;

use think\Model;


class Article extends Model
{
    /**
     * 获取全部文章 分页
     * @param $cateid
     * @param int $pagenum
     * @return mixed
     */
    public function getAllArticle($cateid, $pagenum = 2)
    {
        $cateModel = new cateModel();
        $allCateId = $cateModel->getchildrenid($cateid);
        $artRes = db('article')->where('index_rec','<>','1')->where("cateid IN($allCateId)")->order('time desc')->paginate($pagenum);
        return $artRes;
    }

    /**
     * 右侧热门点击
     * @param $cateid
     * @return mixed
     */
    public function getHorRes($cateid)
    {
        $cate = new cateModel();
        $allCateId = $cate->getchildrenid($cateid);
        $artRes = db("article")->where("cateid IN($allCateId)")->order('click desc')->limit(6)->select();
        return $artRes;
    }

    /**
     * 首页新文章数据
     * @return mixed
     */
    public function getNewArticle()
    {
//        $newArticles = $this->order('id desc')->limit(10)->select();
        $newArticles = db('article')
            ->alias('a')
            ->field('a.id,a.title,a.desc,a.click,a.pic,a.time,a.zan,a.content,c.name')
            ->join('cate c', 'a.cateid=c.id')
            ->order('a.id desc')
            ->limit(10)
            ->select();
        return $newArticles;
    }

    /**
     * 获取热点文章
     * @param int $num 需要热点文章数量
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */
    public function getHotArticle($num = 5)
    {
        $hotArticlrs = $this->field('id,title,pic')->limit($num)->order('click desc')->select();
//        dump($hotArticlrs);die;

        return $hotArticlrs;
    }

}