<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TestData extends CI_Controller
{
    public function index()
    {
        $_mysqli = new mysqli('localhost', 'root', 'Znq@2017', 'xixiu', '3306');
        $_sql = "insert into `goods`(`title`,`subTitle`,`poster`,`banner`,`detailPoster`,`curPrice`,`passPrice`,`count`,`sold`,`state`)VALUES ('溪秀修护面膜','','','','',68,69.0,100,0,0)";
        $result = $_mysqli->character_set_name();

        $_mysqli->query('set names utf8');
        $_mysqli->query($_sql);
        echo $result . '<br>';
        $_mysqli->close();
        echo 'over';
    }
}


