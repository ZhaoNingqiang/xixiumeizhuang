<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/26
 * Time: 下午1:50
 */
class Category extends Admin_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
        $this->load->library('form_validation');

        #激活分析器以调试程序
        $this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $data['cates'] = $this->category_model->list_category();
        $this->load->view('cat_list.html', $data);

    }

    public function add()
    {
        $data['cates'] = $this->category_model->list_category();
        $this->load->view('cat_add.html', $data);
    }

    public function edit($cat_id)
    {
        $data['cates'] = $this->category_model->list_category();
        $data['current_cate'] = $this->category_model->get_cate($cat_id);
        $this->load->view('cat_edit.html',$data);
    }

    public function insert()
    {
        $this->form_validation->set_rules('cat_name', '分类名称', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['message'] = validation_errors();
            $data['wait'] = 3;
            $data['url'] = site_url('admin/category/add');
            $this->load->view('message.html', $data);
        } else {
            $data['cat_name'] = $this->input->post('cat_name', true);
            $data['parent_id'] = $this->input->post('parent_id');
            $data['unit'] = $this->input->post('unit');
            $data['sort_order'] = $this->input->post('sort_order', true);
            $data['is_show'] = $this->input->post('is_show');
            $data['cat_desc'] = $this->input->post('cat_desc', true);

            if ($this->category_model->add_category($data)) {
                //插入成功
                $data['message'] = '添加成功！';
                $data['wait'] = 3;
                $data['url'] = site_url('admin/category');
                $this->load->view('message.html', $data);
            } else {
                //插入失败
                $data['message'] = '添加失败！';
                $data['wait'] = 3;
                $data['url'] = site_url('admin/category/add');
                $this->load->view('message.html', $data);
            }

        }
    }

    public function update(){
        $cat_id = $this->input->post('cat_id');
        $sub_cates = $this->category_model->list_category($cat_id);
        $sub_ids = array();
        foreach ($sub_cates as $sub_cate){
            $sub_ids[] = $sub_cate['cat_id'];
        }
       $parent_id = $this->input->post('parent_id');
        if ($cat_id == $parent_id || in_array($cat_id,$sub_ids)){
            $data['message'] = '不能将分类放置到当前分类或其子分类';
            $data['wait'] = 3;
            $data['url'] = site_url('admin/category/edit/'.$cat_id);
            $this->load->view('message.html',$data);
        }else{
            $this->form_validation->set_rules('cat_name','分类名称','trim|required');
            if ($this->form_validation->run() == false){
                $data['message'] = validation_errors();
                $data['wait'] = 3;
                $data['url'] = site_url('admin/category/edit/'.$cat_id);
                $this->load->view('message.html',$data);
            }else{
                $data['cat_name'] = $this->input->post('cat_name', true);
                $data['parent_id'] = $this->input->post('parent_id');
                $data['unit'] = $this->input->post('unit');
                $data['sort_order'] = $this->input->post('sort_order', true);
                $data['is_show'] = $this->input->post('is_show');
                $data['cat_desc'] = $this->input->post('cat_desc', true);

               if ($this->category_model->update_cate($cat_id,$data)){
                   $data['message'] = '更新成功';
                   $data['wait'] = 3;
                   $data['url'] = site_url('admin/category');
                   $this->load->view('message.html',$data);
               }else{
                   $data['message'] = '更新失败';
                   $data['wait'] = 3;
                   $data['url'] = site_url('admin/category/edit/'.$cat_id);
                   $this->load->view('message.html',$data);
               }
            }
        }


    }


}