<?php
/**
 * Desc: 策略模式，同一个时间只有一个策略在使用。
 *       此模式可以整体地替换算法的实现部分
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

//使用普通会员策略
$price = new Price(new PrimaryMemberPrice());
$mprice = $price->quote(55);
echo $mprice ."<br />";

//使用中级会员策略
$price = new Price(new MiddleMemberPrice());
$mprice = $price->quote(55);
echo $mprice;
