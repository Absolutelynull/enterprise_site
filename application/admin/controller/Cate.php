<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/12
 * Time: 16:18
 */

namespace app\admin\controller;

use app\admin\model\Cate as cateModel;

class Cate extends Common
{
    protected $beforeActionList = [
        'delsoncate' => ['only' => 'delete'],

    ];

    public function lst()
    {
        $cateModel = new cateModel;
        $cates = $cateModel->catetree();
        if (request()->isPost()) {
            $sort_ids = input('post.');

            foreach ($sort_ids as $k => $v) {

                $cateModel->update(['id' => $k, 'sort' => $v]);
            }
            $this->success('更新排序成功，正在跳转~~', 'cate/lst');
        }

        $this->assign('cates', $cates);
        return $this->fetch();

    }

    public function add()
    {
        $cateModel = new cateModel;
        if (request()->isPost()) {
            $data = input('post.');
            $result = $cateModel->save($data);
            if ($result === 1) {
                $this->success('添加栏目成功', 'cate/lst');
            } else {
                $this->error('添加栏目失败');
            }
        } else if (request()->isGet()) {
            $catenames = $cateModel->catetree();
            $this->assign('catenames', $catenames);
            return $this->fetch();

        } else {
            $this->error('未知错误!', 'cate/add');
        }

    }

    public function edit()
    {
        $cate = new cateModel;

        if (request()->isGet()) {
            $cates = $cate->find(input('id'));
            $cateres = $cate->catetree();
            $this->assign([
                'catenames' => $cateres,
                'cate' => $cates
            ]);
        } else if (request()->isPost()) {


            $id = trim(input('post.id'));
            $data = input('post.');
            $result = $cate->save($data, ['id' => $id]);
            if ($result === 1) {
                $this->success('修改栏目成功', 'cate/lst');
            } else {
                $this->error('修改栏目失败');
            }
        }
        return $this->fetch();
    }

    public function delete()
    {
        $del = db('cate')->delete(input('id'));
        if ($del) {
            $this->success('删除栏目成功', 'lst');
        } else {
            $this->error('删除栏目失败');
        }
    }

    public function delsoncate()
    {
        $cateid = input('id');  //要删除的当前栏目的ID

        $cateModel = new cateModel;
        $cateids = $cateModel->getchilrenid($cateid);
        if ($cateids) {
            db('cate')->delete($cateids);
        }

    }


}