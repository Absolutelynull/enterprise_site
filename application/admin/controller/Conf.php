<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/17
 * Time: 17:39
 */

namespace app\admin\controller;


use think\Controller;


use app\admin\model\Conf as confModel;
use think\Request;

class Conf extends Controller
{
    public function index()
    {
        $confModel = new confModel();
        if (\request()->isGet()) {
            $confs = $confModel->select();
            $this->assign('confs', $confs);
            return $this->fetch();
        } elseif (\request()->isPost()) {
            $data = input('post.');
            foreach ($data as $k => $v) {
                $confModel->where('id', $k)->update(['value' => $v]);
            }
            $this->success('更新配置项成功','index');

        }
    }

    /**
     * 配置项显示
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbExceptio
     */
    public function lst()
    {
        $confModel = new confModel();

        $confs = $confModel->order('id desc')->select();
        $this->assign('confs', $confs);
        return $this->fetch();
    }

    /**
     * 添加配置项
     * @return mixed
     */
    public function add()
    {
        $confModel = new confModel();
        if (request()->isPost()) {
            $data = input('post.');
            /* 数据验证 */
            $validate = $this->validate($data,'Conf');
            if($validate !== true){
                $this->error($validate);die;
            }
            if ($data['values']) {
                $data['values'] = str_replace('，', ',', $data['values']);
            }
            $result = $confModel->save($data);
            if ($result) {
                $this->success('添加配置项成功', 'lst');
            } else {
                $this->error('添加配置项失败');
            }
            die;
        }
        return $this->fetch();
    }

    /**
     * 编辑配置
     * @return mixed
     * @throws \think\exception\DbExceptions
     */
    public function edit()
    {

        if (request()->isGet()) {
            $id = input('id');
            $conf = confModel::get($id);
            if (!$conf) {
                $this->error('配置不存在');
                die;
            }
            $this->assign('conf', $conf);
            return $this->fetch();
        } else if (request()->isPost()) {
            $data = input('post.');
            /* 数据验证 */
            $validate = $this->validate($data,'Conf');
            if($validate !== true){
                $this->error($validate);die;
            }

            if ($data['values']) {
                $data['values'] = str_replace('，', ',', $data['values']);
            }

            $confModel = new confModel();
            $update = $confModel->save($data, ['id' => $data['id']]);
            if ($update) {
                $this->success('配置更新成功', 'lst');
            } else {

                $this->error('配置修改失败');
            }

        }


    }

    /**
     * 删除配置
     * @throws \think\exception\DbException
     */
    public function delete()
    {
        $id = input('id');
        $confModel = confModel::get($id);

        if ($confModel) {
            $del_result = $confModel->delete();
            if ($del_result) {
                $this->success('删除配置成功', 'lst');
            } else {
                $this->error('删除失败');
            }
        } else {
            $this->error('配置不存在！', 'lst');
        }
    }


}