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

    public function get_goods()
    {
        $query = $this->db->get('goods');
        return $query->result_array();
    }
}