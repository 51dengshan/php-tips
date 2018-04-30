<?php
/**
 * Desc: 迭代器模式，提供一种方法顺序访问一个聚合对象中的各种元素，而又不暴露该对象的内部表示。
 * 适用场景如下：
 * 1、访问一个聚合对象的内容而无需暴露它的内部表示
 * 2、支持对聚合对象的多种遍历
 * 3、为遍历不同的聚合结构提供一个统一的接口
 * User: yinyinghui
 * Date: 2018/4/27
 * Time: 下午3:41
 */

ini_set("display_errors","on");
error_reporting(E_ALL || E_STRICT);

spl_autoload_register(autoload);


function autoload($class) {
    include_once(dirname(__FILE__)."/".$class.".php");
}

$bookShelf = new BookShelf(20);
$bookShelf->appendBook(new book("Arround the World in 80 Days"));
$bookShelf->appendBook(new Book("Bible"));
$bookShelf->appendBook(new Book("Cinderella"));
$bookShelf->appendBook(new Book("Daddy"));
$it = $bookShelf->getIterator();
while ($it->hasNext()){
    $book = $it->next();
    echo $book->getName() ."<br />";
}











