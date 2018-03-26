<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: znq
 * Date: 2018/3/24
 * Time: 下午11:00
 */

class Admin_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->load_admin();

        if (! $this->session->userdata('admin')){
            redirect('admin/privilege/login');
        }
    }

}
class Themes_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->load_themes();
    }

}

