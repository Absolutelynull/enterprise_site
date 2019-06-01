<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/9
 * Time: 16:11
 */

namespace app\admin\model;

use think\Model;

use think\Validate;

class Admin extends Model
{

    /**
     * admin管理员列表显示 分页
     * @param $pageCount 显示的数量
     * @return \think\Paginator
     * @throws \think\exception\DbException
     * @return [\think\Paginator] [description]
     */
    public function getAdmin($pageCount)
    {
        return $this->paginate($pageCount);
    }

    /**
     * @param $data
     * @return int 1/登录成功  0/用户不存在  -1/密码不正确
     */
    public function login($data){
        $admin = Admin::getByUsername($data['username']);
        if($admin){
            //登录成功
            if($admin['password'] === md5($data['password'])){
                session('admin',$admin['username']);
                session('id',$admin['id']);
                return 1;
            }else{
                return -1;   //密码不正确
            }

        }else{
            return 0;//用户不存在
        }
    }


}