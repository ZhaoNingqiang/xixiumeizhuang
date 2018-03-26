<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
        $this->load->library('form_validation');
    }

    /**
     * 登录
     */
    public function login()
    {
        $this->load->view('login.html');
    }

    public function signin()
    {
        //设置检验规则
        $this->form_validation->set_rules('username', '用户名', 'required');
        $this->form_validation->set_rules('password', '密码', 'required', array('required' => 'You must provide a %s.'));

        $captcha = strtolower($this->input->post('captcha'));

        $code = strtolower($this->session->userdata('code'));

        if ($captcha === $code){
            if($this->form_validation->run() == false){
                $data['message'] = validation_errors();
                $data['url'] = site_url('/admin/privilege/login');
                $data['wait'] = 3;
                $this->load->view('message.html',$data);
            }else{
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                if ($username == 'admin' && $password == '123'){
                    //ok save session info and jump to index page
                    $this->session->set_userdata('admin',$username);
                    redirect('admin/home');
                }else{
                    $data['message'] = '用户名或则密码错误，请重新登录！';
                    $data['url'] = site_url('/admin/privilege/login');
                    $data['wait'] = 3;
                    $this->load->view('message.html',$data);
                }
            }

        }else{//验证码不正确
            $data['message'] = '验证码错误，请重试！';
            $data['url'] = site_url('/admin/privilege/login');
            $data['wait'] = 3;
            $this->load->view('message.html',$data);
        }
    }

    public function signout(){
        $this->session->unset_userdata('admin');
        $this->session->sess_destroy();
        redirect('admin/privilege/login');
    }

    /**
     * 生成验证码
     */
    public function code()
    {

        $varl = array(
            'word_length' => 4,
            'font_size'	=> 50,
        );
        $code = create_captcha($varl);
        $this->session->set_userdata('code', $code);
    }

}