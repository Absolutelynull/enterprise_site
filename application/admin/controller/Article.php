<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/14
 * Time: 16:31
 */

namespace app\admin\controller;


use think\Controller;

use app\admin\model\Article as articlModel;
use app\admin\model\Cate as cateModel;

class Article extends Controller
{

    /**
     * 前置操作
     * @var [array]  [description]
     * @return [array] [description]
     */
    protected $beforeActionList = [
        'cates' => ['only' => 'add,edit'],
    ];


    /**
     * 分页显示文章列表
     * @return mixed
     * @throws \think\exception\DbExceptionsd
     */
    public function lst()
    {
        $articlModel = new articlModel();
        $articles = $articlModel->order('id desc')->paginate(2);
        $this->assign('articles', $articles);
        return $this->fetch();

    }

    /**
     * 添加文章
     * @return mixed
     */
    public function add()
    {

        $articleModel = new articlModel();
        if (request()->isPost()) {
            $data = input('post.');
            $data['time'] = time();
            $result = $articleModel->save($data);
            if ($result === 1) {
                $this->success('文章添加成功', 'article/lst');
            } else {
                $this->error('文章添加失败');
            }
        }
        return $this->fetch();
    }

    public function edit()
    {
        $id = input('id');

        $articlModel = new articlModel();
        if (request()->isPost()) {
            $data = input('post.');
            $result = $articlModel->allowField(true)->save($data, ['id' => $id]);

            if ($result) {
                $this->success('文章修改成功', 'lst');
            } else {

                $this->error('文章修改失败');
            }
            die;
        } else {
            $article = articlModel::get($id);
            if (!$article) {
                $this->error('文章不存在', 'lst');
                die;
            }
            $this->assign('article', $article);

        }

        return $this->fetch();
    }

    /**
     * 删除文章
     */
    public function delete()
    {
        $id = input('id');
        $result = articlModel::destroy(['id' => $id]);
        if ($result) {
            $this->success('文章删除成功', 'lst');
        } else {
            $this->error('文章删除失败');

        }
    }

    public function cates()
    {
        $cateModel = new cateModel;
        $cates = $cateModel->catetree();
        $this->assign([
            'cates' => $cates,
        ]);

    }

}