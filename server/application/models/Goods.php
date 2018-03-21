<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/21
 * Time: 下午1:00
 */

class Goods
{
    public $title;
    public $subTitle;
    public $poster;
    public $banner;
    public $detailPoster;
    public $curPrice;
    public $passPrice;
    public $count;
    public $sold;
    public $state;
    public $class;
    public $type;

    /**
     * Goods constructor.
     * @param $title
     * @param $subTitle
     * @param $poster
     * @param $banner
     * @param $detailPoster
     * @param $curPrice
     * @param $passPrice
     * @param $count
     * @param $sold
     * @param $state 0在售，1售罄
     * @param $class 1墨藻系列，2积雪草系列，3彩妆护肤
     * @param $type 0商品，1套餐
     */
    public function __construct($title, $subTitle, $poster, $banner, $detailPoster, $curPrice, $passPrice, $count, $sold, $state, $class, $type=0)
    {
        $this->title = $title;
        $this->subTitle = $subTitle;
        $this->poster = $poster;
        $this->banner = $banner;
        $this->detailPoster = $detailPoster;
        $this->curPrice = $curPrice;
        $this->passPrice = $passPrice;
        $this->count = $count;
        $this->sold = $sold;
        $this->state = $state;
        $this->class = $class;
        $this->type = $type;

    }


}

































