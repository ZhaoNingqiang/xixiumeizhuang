<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/22
 * Time: 下午2:16
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Activity
{
    public $id;
    public $title;
    public $subTitle;
    public $poster;
    public $type;

    /**
     * Activity constructor.
     * @param $id
     * @param $title
     * @param $subTitle
     * @param $poster
     * @param $type 1详情2列表3网页
     */
    public function __construct($id, $title, $subTitle, $poster, $type)
    {
        $this->id = $id;
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->poster = $poster;
        $this->type = $type;
    }

}