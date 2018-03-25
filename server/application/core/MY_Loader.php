<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: znq
 * Date: 2018/3/24
 * Time: 下午10:20
 */

class MY_Loader extends CI_Loader
{
    /**
     * 加载后台视图
     */
    public function load_admin(){
        $this->_ci_view_paths =	array(FCPATH.ADMIN_VIEWS	=> TRUE);
    }

    /**
     * load normal views
     */
    public function load_themes(){
        // now do nothing
    }


}