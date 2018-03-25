<?php
/**
 * Created by PhpStorm.
 * User: znq
 * Date: 2018/3/25
 * Time: 下午2:12
 */

class Privilege extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->load_admin();
        $this->load->helper('captcha');
    }

    /**
     * 登录
     */
    public function login()
    {
        $this->load->view('login.html');
    }


    /**
     * 生成验证码
     */
    public function code()
    {
        $vars = array(
            'img_path' => './data/captcha',
            'img_url' => base_url() . '/data/captcha/'
        );
        $data = create_captcha($vars);
        var_dump($data);
    }

}