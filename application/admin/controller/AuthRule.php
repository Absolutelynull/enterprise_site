<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/21
 * Time: 18:19
 */

namespace app\admin\controller;

use app\admin\model\AuthRule as authRuleModel;

class AuthRule extends Common
{
    public function lst()
    {
        $authRule = new authRuleModel();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('auth_rules', $authRuleRes);
        return $this->fetch();
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $plevel = db('auth_rule')->where('id', $data['pid'])->field('level')->find();
            if ($plevel != null) {
                $data['level'] = $plevel['level'] + 1;
            } else {
                $data['level'] = 0;
            }
            $result = db('auth_rule')->insert($data);
            if ($result) {
                $this->success('添加权限成功', 'lst');
            } else {
                $this->error('添加权限失败');
            }
        }
        $authRule = new authRuleModel();
        $authRuleRes = $authRule->authRuleTree();
        $this->assign('authRuleRes', $authRuleRes);
        return $this->fetch();
    }

    public function edit()
    {
        if (request()->post()) {
            $data = input('post.');
            $plevel = db('auth_rule')->where('id', $data['pid'])->field('level')->find();
            if ($plevel != null) {
                $data['level'] = $plevel['level'] + 1;
            } else {
                $data['level'] = 0;
            }
            $save = db('auth_rule')->update($data);
            if ($save) {
                $this->success('修改权限成功！', 'lst');
            } else {
                $this->error('修改权限失败！');
            }


        }
        $authRule = new authRuleModel();
        $authRuleRes = $authRule->authRuleTree();
        $authRules = $authRule->find(input('id'));
        $this->assign([
                'authRuleRes' => $authRuleRes,
                'authRules' => $authRules,]
        );
        return $this->fetch();
    }

    public function delete()
    {
        $id = input('id');
        $authRuleModel = new authRuleModel;
        $result = $authRuleModel->where(['id' => $id])->delete();
//        $authruRuleIds = $authRuleModel->getchilrenid(input('id'));
//        dump($authruRuleIds);
        if ($result) {
            $this->success('删除成功', 'lst');
        } else {
            $this->error('删除失败');
        }


    }
}