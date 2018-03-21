<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/20
 * Time: 下午5:37
 */
class Shell extends CI_Controller
{
    /**
     * @param string $command
     */
    public function exec($command = 'ls'){
       echo $command.'<br>';
       exec($command,$ls);
       print_r(ls);
   }
}