<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/26
 * Time: 下午3:02
 */

class Category_model extends CI_Model
{
    const TAB_CATE = 'category';

    public function list_category($pid = 0)
    {
        $query = $this->db->get(self::TAB_CATE);
        $cate = $query->result_array();
        return $this->_tree($cate, $pid);

    }

    private function _tree($arr, $pid = 0, $level = 0)
    {
        static $tree = array();
        foreach ($arr as $v) {
            if ($v['parent_id'] == $pid) {
                $v['level'] = $level;
                $tree[] = $v;
                $this->_tree($arr, $v['cat_id'], $level + 1);

            }
        }
        return $tree;
    }

}