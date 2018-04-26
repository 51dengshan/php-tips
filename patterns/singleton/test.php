<?php
/**
 * Desc: 测试单例模式
 * User: yinyinghui
 * Date: 2018/4/26
 * Time: 上午11:25
 */
// 注册自加载
spl_autoload_register('autoload');
function autoload($class)
{
    include_once (dirname($_SERVER['SCRIPT_FILENAME']).'/'.$class.'.php');
}



$singletonOne = Singleton::getInstance();
$singletonTwo = Singleton::getInstance();

if($singletonOne === $singletonTwo)
{
    print_r("singletonOne 和 singletonTwo 代表的是同一个实例");
}else
{
    print_r("singletonOne 和 singletonTwo 代表的是不同实例");
}

