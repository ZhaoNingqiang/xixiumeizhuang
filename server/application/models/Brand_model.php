<?php
/**
 * Created by PhpStorm.
 * User: znq
 * Date: 2018/4/1
 * Time: 下午9:26
 */

class Brand_model extends CI_Model
{
    const TAB_NAME = 'brand';

    public function list_brand()
    {
        $query = $this->db->get(self::TAB_NAME);
        return $query->result_array();

    }

    public function add_brand($data)
    {
        return $this->db->insert(self::TAB_NAME, $data);

    }
}