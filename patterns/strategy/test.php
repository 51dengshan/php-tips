<?php
/**
 * Desc:
 * User: yinyinghui
 * Date: 2018/4/25
 * Time: 下午5:32
 */

ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);

// 注册自加载
spl_autoload_register('autoload');

function autoload($class)
{
    include_once (dirname($_SERVER['SCRIPT_FILENAME']).'/'.$class.'.php');
}

use strategy;
$primaryMember =  new PrimaryMemberPrice();
$price = new Price($primaryMember);
$mprice = $price->quote(55);
echo $mprice ."<br />";

$level = new MiddleMemberPrice();
$price = new Price($level);
$mprice = $price->quote(55);
echo $mprice;
