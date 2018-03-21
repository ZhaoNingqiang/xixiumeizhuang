<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/21
 * Time: 下午2:16
 */
require_once '../models/Goods.php';
$goods = new Goods('溪秀氨基酸洁面啫喱',
    '',
    '',
    ['aaa','bbb'],
    array('kkkkkkd','kkdv'),
    68,
    68,
    120,
    22,
    0,
    3);
echo json_encode($goods);