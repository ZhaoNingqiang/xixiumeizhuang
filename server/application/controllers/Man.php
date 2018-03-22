<?php
//defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/21
 * Time: 下午12:57
 *
 * 清空数据库表并且重置自动增长列的值为0:
 *
 * TRUNCATE TABLE TableName
 *
 * 仅仅清空数据库表:
 *
 * DELETＥ FROM TableName
 */
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH . 'models/Goods.php');

class Man extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("goods_model");
    }


    public function add_goods()
    {
        $host = 'https://xixiu-1256206862.cos.ap-beijing.myqcloud.com/';
        $arr = array();

        $arr[0] = new Goods('溪秀修护面膜',
            '',
            $host . 'poster/xlh.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/xlh.jpeg',
            68,
            68,
            120,
            22,
            0,
            2);

        $arr[1] = new Goods('溪秀植物精粹系列',
            '',
            $host . 'poster/sr.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/sr.jpeg',
            128,
            128,
            120,
            22,
            0,
            2);

        $arr[2] = new Goods('溪秀冰感透肌舒缓面膜',
            '',
            $host . 'poster/cs.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/cs.jpeg',
            68,
            68,
            120,
            22,
            0,
            2);

        $arr[3] = new Goods('溪秀植物精粹保湿霜',
            '',
            $host . 'poster/bss.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/bss.jpeg',
            128,
            128,
            120,
            22,
            0,
            2);

        $arr[4] = new Goods('溪秀积雪草雪肌素颜霜',
            '',
            $host . 'poster/sys.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/sys.jpeg',
            128,
            128,
            120,
            22,
            0,
            2);
        //------

        $arr[5] = new Goods('氨基酸活氧洁面啫喱',
            '',
            $host . 'poster/jmzl.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/jmzl.jpeg',
            68,
            68,
            120,
            22,
            0,
            3);

        $arr[6] = new Goods('溪秀雪肌无暇气垫CC霜',
            '',
            $host . 'poster/ccs.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/ccs.jpeg',
            128,
            128,
            120,
            22,
            0,
            3);

        $arr[7] = new Goods('溪秀新品口红',
            '',
            $host . 'poster/kh.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/kh.jpeg',
            128,
            128,
            120,
            22,
            0,
            3);

        $arr[8] = new Goods('溪秀茶麸无硅油洗护组合',
            '',
            $host . 'poster/xfs.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/xfs.jpeg',
            156,
            156,
            120,
            22,
            0,
            3);


        $arr[9] = new Goods('溪秀墨藻亮肤精致精华液',
            '',
            $host . 'poster/mz_jhy.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/mz.jpeg',
            138,
            138,
            120,
            22,
            0,
            1);


        $arr[10] = new Goods('溪秀墨藻亮肤精致面膜',
            '',
            $host . 'poster/mz_mm.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/mz.jpeg',
            88,
            88,
            120,
            22,
            0,
            1);

        $arr[11] = new Goods('溪秀墨藻弹润美肌液',
            '',
            $host . 'poster/mz_mjy.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/mz.jpeg',
            138,
            138,
            120,
            22,
            0,
            1);

        $arr[12] = new Goods('溪秀墨藻多效修护霜',
            '',
            $host . 'poster/mz_xhs.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/mz.jpeg',
            138,
            138,
            120,
            22,
            0,
            1);

        $arr[13] = new Goods('299元套餐',
            '',
            $host . 'poster/tc_299.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/tc_299.jpeg',
            199,
            199,
            120,
            22,
            0,
            1,
            1);

        $arr[14] = new Goods('199元套餐',
            '',
            $host . 'poster/tc_199.jpeg',
            json_encode([$host . 'detail_banner/jmzl_1.jpg', $host . 'detail_banner/jmzl_2.jpg']),
            $host . 'detail/tc_199.jpeg',
            299,
            299,
            120,
            22,
            0,
            1,
            1);


        foreach ($arr as $item) {
            $this->goods_model->insert_goods($item);
        }


        echo 'ok';

    }

}










