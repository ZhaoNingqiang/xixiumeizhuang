<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: znq
 * Date: 2018/3/24
 * Time: 下午11:05
 */

class Home extends Admin_Controller
{
    public function index(){
        $this->load->view('index.html');
    }

    #展示头部
    public function top(){
        $this->load->view('top.html');
    }
    public function menu(){
        $this->load->view('menu.html');
    }
    public function drag(){
        $this->load->view('drag.html');
    }
    public function main(){
        $this->load->view('main.html');
    }

}