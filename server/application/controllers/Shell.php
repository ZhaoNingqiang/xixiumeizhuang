<?php
/**
 * Created by PhpStorm.
 * User: Ningqiang.Zhao
 * Date: 2018/3/20
 * Time: 下午5:37
 */
$a = array('aa','bb','cc');

$b = ['aa','bb','cc'];

if ($a === $b){
    echo 'a === b ';
}

if ($a == $b){
    echo 'a == b ';
}

static $va = array();
foreach ($a as $aitem){
    $va[] = $aitem;
}
var_dump($va);
