<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/20
 * Time: 下午2:37
 * Class Goods_model 商品的Model
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Goods_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function get_goodses($type)
    {

        $query = $this->db->query("select * from goods WHERE `type` = $type");

        return $query->result();
    }

    public function get_detail($id)
    {
        $query = $this->db->query("select * from goods WHERE `id` = $id limit 1");
        return $query->row();

    }


    public function insert_goods($goods)
    {
        $this->db->insert('goods', $goods);
    }
}

