<?php
/**
 * Desc: 表示集合的接口
 *       想要遍历集合中的元素时，可以调用iterator方法来生成一个实现了Iterator接口的类的实例。
 * User: yinyinghui
 * Date: 2018/4/27
 * Time: 下午3:30
 */

interface Aggregate
{
    //用于生成一个用于遍历集合的迭代器
    public function getIterator();
}