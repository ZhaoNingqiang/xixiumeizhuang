<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/22
 * Time: 下午2:01
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    /**
     * 获取活动
     */
    public function get_activities()
    {
        $query = $this->db->query("select * from activity");
        return $query->result();
    }

}

