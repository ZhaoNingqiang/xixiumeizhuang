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
    }

    public function index()
    {
        $data['cates'] = $this->category_model->list_category();
        $this->load->view('cat_list.html', $data);

    }

    public function add()
    {
        $this->load->view('cat_add.html');
    }

    public function edit()
    {
        $this->load->view('cat_edit.html');
    }
}