<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/20
 * Time: 下午2:34
 */
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("goods_model");
    }

    public function index(){
        $goods = $this->goods_model->get_goods();
        $this->json($goods);

    }

    public function json ($data) {
        return $this->output
            ->set_content_type('application/json')
            ->set_output(
                json_encode($data)
            );
    }

}