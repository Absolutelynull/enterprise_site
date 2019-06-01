<?php

namespace app\admin\controller;


use app\admin\model\Admin as AdminModel;


class Admin extends Common
{

    public function index()
    {
        $this->show_admin();
        return $this->fetch('lst');

    }

    /**
     * 管理员显示
     * @throws \think\exception\DbException
     * @return [void] [description]
     */
    private function show_admin()
    {
        //        $data = db("admin")->order('id', 'esc')->paginate(3);
        $adminModel = new AdminModel;
        $data = $adminModel->paginate(1);
        $this->assign("admins", $data);
    }

    public function lst()
    {
        $auth = new Auth();
        
        $this->show_admin();
        return $this->fetch('lst');

    }

    /**
     * 添加管理员
     * @return mixed
     */
    public function add()
    {
        if (request()->isPost()) {
            $data['username'] = trim(input('post.username'));
            $data['password'] = trim(input('post.password'));

            /* 验证数据 */
            $result = $this->validate($data, 'Admin.add');
            if ($result !== true) {
                $this->error($result, 'add');
                exit;
            }
            $data['password'] = md5($data['password']);
            $indexModel = new AdminModel($data);

            $addResult = $indexModel->allowField(true)->save();
            if ($addResult) {
                $groupAccess['uid'] = $indexModel->getLastInsID();
                $groupAccess['group_id'] = input('post.group_id');
                db('auth_group_access')->insert($groupAccess);
                $this->success("添加管理员成功", 'admin/lst');
            } else {
                $this->error("添加管理员失败", 'admin/add');
            }
        }

        $authGroupRes = db('auth_group')->select();
        $this->assign([
            'authGroupRes' => $authGroupRes,
        ]);
        return $this->fetch();
    }

    /**
     * 编辑管理员账号
     * @return mixed
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @return [mixed] [description]
     */
    public function edit()
    {
        if (request()->isGet()) {
            /*显示账号信息*/
            $id = input('id');
            $authGroupRes = db('auth_group')->select();

            $admin = Db('admin')->where(['id' => $id])->find();
            if (!$admin) {
                $this->error("用户不存在!", 'lst');
                exit;
            }
            $this->assign([
                'authGroupRes' => $authGroupRes,
            ]);
            $this->assign('admin', $admin);
        } else if (request()->isPost()) {
            /*验证数据是否符合要求*/
            $data = input('post.');
            $validate = $this->validate($data, 'Admin.edit');
            if ($password = trim(input('post.password'))) {
                $data['password'] = md5($password);
            }
            if ($validate !== true) {
                $this->error($validate, 'lst');
                exit;
            }

            /*更新数据*/
            $id = trim(input('post.id'));
            $adminModel = new AdminModel();

            $result = $adminModel->allowField(true)->save($data, ['id' => $id]);
            if ($result) {
                $groupAccess['uid'] = $data['id'];
                $groupAccess['group_id'] = $data['group_id'];
                db('auth_group_access')->where('uid',  $groupAccess['uid'])->update($groupAccess);
                $this->success('修改管理员成功', 'lst');
            } else {
                $this->error('修改管理员失败');
            }

        }

        return $this->fetch();
    }

    public function delete()
    {
        $id = trim(input('id'));
        $adminModel = AdminModel::get($id);
        if ($adminModel !== null) {
            $result = $adminModel->delete();
            if ($result) {
                $this->success('删除管理员成功!', 'lst');
            } else {
                $this->error('删除失败');
            }
        } else {
            $this->error('非法操作!', 'lst');
        }

    }

}