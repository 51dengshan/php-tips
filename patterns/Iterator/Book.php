<?php
/**
 * Desc: 书的类
 * User: yinyinghui
 * Date: 2018/4/27
 * Time: 下午5:00
 */

class Book
{

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($value) {
        $this->name = $value;
    }
}