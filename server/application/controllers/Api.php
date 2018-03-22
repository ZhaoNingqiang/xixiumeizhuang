<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/20
 * Time: 下午2:34
 */
class Api extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("goods_model");
        $this->load->model("activity_model");
    }

    public function home()
    {
        $activities = $this->activity_model->get_activities();

        $goodses = $this->goods_model->get_goodses('0');

        $taocan = $this->goods_model->get_goodses('1');


        $data = [
            'activites' => $activities,
            'goodses' => $this->json_decode_goodses_banner($goodses),
            'taocan' => $this->json_decode_goodses_banner($taocan)
        ];

        $this->return_data($data);
    }

    public function goods_detail($id)
    {
        $goods_detail = $this->goods_model->get_detail($id);

        if ($goods_detail) {
            $this->return_data($this->json_decode_banner($goods_detail));
        } else {
            $this->return_data($msg = 'no data');
        }


    }

    private function return_data($data = null, $code = 0, $msg = 'OK')
    {
        $this->json([
            'code' => $code,
            'msg' => $msg,
            'data' => $data
        ]);
    }


    private function json_decode_goodses_banner($goodses)
    {
        foreach ($goodses as $goods) {
            $this->json_decode_banner($goods);
        }
        return $goodses;
    }

    private function json_decode_banner($goods)
    {
        $goods->banner = json_decode($goods->banner);
        return $goods;
    }

}