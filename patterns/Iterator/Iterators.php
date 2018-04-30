<?php
/**
* Desc: 遍历集合的接口。用于遍历集合中的元素，相当于循环语句中的循环变量
* User: yinyinghui
* Date: 2018/4/27
* Time: 下午3:30
*/

interface Iterators
{
    //是否存在下一个元素，返回值为Boolean类型。
    public function hasNext();

    //获取下一个元素
    public function next();
}