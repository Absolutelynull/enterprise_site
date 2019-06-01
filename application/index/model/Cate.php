<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/26
 * Time: 10:42
 */

namespace app\index\model;

use think\Model;

class Cate extends Model
{

    public function getchildrenid($cateid)
    {
        /**
         * 查询所有的数据
         */
        $cateres = $this->select();
//        dump($cateres);die;

        $arr = $this->_getchildrenid($cateres, $cateid);
        $arr[] = $cateid;
        $strId = implode(',', $arr);
        return $strId;
    }

    private function _getchildrenid($cateres, $cateid)
    {
        /*
         * 在所有的数据中 找到 栏目下面的子栏目所有的数据
         */
        static $arr = array();
        foreach ($cateres as $k => $v) {
            if ($v['pid'] == $cateid) {
                $arr[] = $v['id'];
                $this->_getchildrenid($cateres, $v['id']);
            }
        }
        return $arr;
    }

    public function getparents($cateid)
    {
        $cateres = $this->field('id,pid,name')->select();
        $cates = db('cate')->field('id,pid,name')->find($cateid);/*查询当前栏目*/
        $pid = $cates['pid'];

        $arr[] = $cates;
        if ($pid) {
            $arr = $this->_getparents($cateres, $cateid);
        }
        return $arr;
    }

    private function _getparents($cateres, $pid)
    {
        /*在所有的数据中 找到 栏目下面的子栏目所有的数据
         */
        static $arr = array();
        foreach ($cateres as $k => $v) {
            if ($v['id'] == $pid) {
                $arr[] = $v;
                $this->_getparents($cateres, $v['pid']);
            }
        }
        return $arr;
    }

    /**
     * 获取首页中间栏目的推荐
     * @return false|\PDOStatement|string|\think\Collection
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\ModelNotFoundException
     * @throws \think\exception\DbException
     */

    public function getCateRec(){
        $cateRec = $this->field('id,name,type')->where('cate_rec',"1")->select();
        return $cateRec;
    }

    public function getBottomRec(){
        $cateRec = $this->field('id,name,type')->where('cate_bottom_rec',"1")->select();
        return $cateRec;
    }

}