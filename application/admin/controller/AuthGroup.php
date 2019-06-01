<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/21
 * Time: 16:04
 */

namespace app\admin\controller;


class AuthGroup extends Common
{
    /**
     * 显示用户组
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function lst()
    {

        $authres = db('auth_group')->paginate(2);
        $this->assign('authres', $authres);
        return $this->fetch();

    }

    /*
     * 添加用户组
     */
    public function add()
    {
        if (request()->post()) {
            $data = input('post.');
            if(isset($data['rules'])){
                $data['rules'] = implode(',',$data['rules']);
            }
            $add = db('auth_group')->insert($data);
            if ($add) {
                $this->success('添加用户组成功', 'lst');
            } else {
                $this->error('添加失败');
            }

        }
        $authRule = new \app\admin\model\AuthRule();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign([
            'authRuleRes' => $authRuleRes,
        ]);
        return $this->fetch();
    }

    /**
     * 更新用户组
     * @return mixed
     * @throws \think\Exception
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     * @throws \think\exception\PDOException
     */
    public function edit()
    {
        if (request()->isPost()) {

            $data = input('post.');
            if (!isset($data['status'])) {
                $data['status'] = 0;
            }
            if(isset($data['rules'])){
                $data['rules'] = implode(',',$data['rules']);
            }
            $result = db('auth_group')->where('id', $data['id'])->update($data);
            if ($result) {
                $this->success('用户组更新成功！', 'lst');
            } else {
                $this->error('更新失败');
            }
        } else {
            $id = input('id');
            $auth = db('auth_group')->find($id);
            $authGroups = db('auth_group')->where('id',$id)->find();
            $authRule = new \app\admin\model\AuthRule();
            $authRuleRes = $authRule->authRuleTree();
            $this->assign([
                'authRuleRes' => $authRuleRes,
                'authGroups' => $authGroups,
            ]);
            if ($auth == null) {
                $this->error('用户组不存在！', 'lst');
            } else {
                $this->assign('auth', $auth);
                return $this->fetch();
            }
        }



    }

    /**
     * 删除用户组
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function delete()
    {
        $id = input('id');
        $result = db('auth_group')->delete($id);
        if ($result) {
            $this->success('删除用户组成功', 'lst');
        } else {
            $this->error('删除失败');
        }
    }

}