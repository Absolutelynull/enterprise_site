<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/16
 * Time: 19:18
 */

namespace app\admin\controller;


use think\Controller;

use app\admin\model\Link as linkModel;

class Link extends Controller
{
    public function lst()
    {
        $linkModel = new linkModel;
        $links = $linkModel->paginate(2);
        $this->assign('links', $links);
        return $this->fetch();

    }

    public function edit()
    {
        $linkModel = new linkModel;
        $id = input('id');
        if (request()->isPost()) {
            $data = input('post.');
            //进行数据验证
            $validate = $this->validate($data, 'link.edit');
            if ($validate !== true) {
                $this->error($validate);
                die;
            }

            $result = $linkModel->save(input('post.'), ['id' => $data['id']]);
            if ($result) {
                $this->success('链接修改成功', 'lst');
            } else {
                $this->error('链接修改失败');
            }
            die;
        } else {
            $link = linkModel::get($id);
            if ($link) {
                $this->assign('link', $link);
            } else {
                $this->error('链接不存在', 'lst');
            }
        }
        return $this->fetch();
    }

    /**
     * 添加
     * @return mixed
     */
    public function add()
    {
        $linkModel = new linkModel;
        if (request()->isPost()) {
            $data = input('post.');
            //进行数据验证
            $validate = $this->validate($data, 'Link.add');
            if ($validate !== true) {
                $this->error($validate);
                die;
            }
            $result = $linkModel->save($data);
            if ($result) {
                $this->success('链接添加成功', 'lst');
            } else {
                $this->error('添加失败');
            }
            die;
        }
        return $this->fetch();

    }

    public function delete()
    {
        $id = input('id');
        $result = linkModel::destroy($id);
        if ($result) {
            $this->success('链接删除成功', 'lst');
        } else {
            $this->error('链接删除失败');
        }
    }

}