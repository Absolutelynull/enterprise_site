<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24
 * Time: 16:29
 */

namespace app\admin\model;


use think\Model;

class AuthRule extends Model
{
    public function authRuleTree()
    {
        $authRuleres = $this->order('id desc')->select();
        return $this->sort($authRuleres);

    }

    public function sort($data, $pid = 0, $level = 0)
    {
        static $arr = array();
        foreach ($data as $k => $v) {
            if ($v['pid'] == $pid) {
                $arr[] = $v;
                $this->sort($data, $v['id']);
            }
        }
        return $arr;
    }

    public function getchilrenid($authid)
    {
        $authres = $this->select();
        return $this->_getchilrenid($authres, $authid);

    }

    function _getchilrenid($authres, $authid)
    {
        static $arr = array();
        foreach ($authres as $k => $v) {
            if ($v['pid'] == $authid) {
                $arr[] = $v['id'];
                $this->_getchilrenid($authres, $v['id']);
            }
        }
        return $arr;
    }
    public function getparentid($authid)
    {
        $authres = $this->select();
        return $this->_getchilrenid($authres, $authid);

    }

    function _getparentid($authres, $authid)
    {
        static $arr = array();
        foreach ($authres as $k => $v) {
            if ($v['pid'] == $authid) {
                $arr[] = $v['id'];
                $this->_getchilrenid($authres, $v['id']);
            }
        }
        return $arr;
    }


}