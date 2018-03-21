<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/20
 * Time: 下午2:37
 */

class Goods_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_goods($type)
    {

        $query = $this->db->get_where('goods', array('type' => $type));
        return $query->row_array();
    }


    public function insert_goods($goods)
    {
        $this->db->insert('goods', $goods);
    }
}