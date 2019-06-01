<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/12
 * Time: 16:22
 */

namespace app\admin\model;

use think\Model;

class Cate extends Model
{

    public function catetree()
    {
        $cateres = $this->order('sort')->select();
        return $this->sort($cateres);
    }

    public function sort($data, $pid = 0, $level = 0)
    {
        static $arr = array();
        foreach ($data as $k => $v) {

            if($v['pid'] == $pid){
                $v['level'] = $level;
                $arr[] = $v;
                $this->sort($data,$v['id'],$level+1);
            }
        }

        return $arr;

    }

    public function getchilrenid($cateid){
//        static $arr = array();
        $cateres = $this->select();
        return $this->_getchilrenid($cateres,$cateid);

    }
    function _getchilrenid($cateres,$cateid){
        static $arr=array();
        foreach ($cateres as $k=> $v){
            if($v['pid'] == $cateid){
                $arr[] = $v['id'];
                $this->_getchilrenid($cateres,$v['id']);
            }

        }
        return $arr;
    }


}