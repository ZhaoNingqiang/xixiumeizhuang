<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: znq
 * Date: 2018/4/1
 * Time: 下午6:52
 */

class Brand extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('brand_model');

    }

    public function index(){
        $this->load->view('brand_list.html');
    }

    public function add(){
        $this->load->view('brand_add.html');
    }

    public function edit(){
        $this->load->view('brand_edit.html');
    }

    public function insert(){
        $this->form_validation->set_rules('brand_name','品牌名称','required');
        if($this->form_validation->run() == false){
            $data['message'] = validation_errors();
            $data['wait'] = 3;
            $data['url'] = site_url('admin/brand/add');
            $this->load->view('message.html',$data);
        }else{
            $data['brand_name'] = $this->input->post('brand_name');
            $data['url'] = $this->input->post('url');
            $data['brand_desc'] = $this->input->post('brand_desc');
            $data['sort_order'] = $this->input->post('sort_order');
            $data['is_show'] = $this->input->post('is_show');

            if ($this->brand_model->add_brand($data)){
                //添加成功
                $data['message'] = '商品品牌添加成功';
                $data['wait'] = 3;
                $data['url'] = site_url('admin/brand/index');
                $this->load->view('message.html',$data);
            }else{
                //添加失败
                $data['message'] = '商品品牌添加失败';
                $data['wait'] = 3;
                $data['url'] = site_url('admin/brand/add');
                $this->load->view('message.html',$data);
            }


        }


    }

    public function createDir(){
        $dir = iconv("UTF-8", "GBK", "./public/upload");
        if (!file_exists($dir)){
            mkdir ($dir,0777,true);
            echo '创建文件夹bookcover成功';
        } else {
            echo '需创建的文件夹bookcover已经存在';
        }

    }




}










