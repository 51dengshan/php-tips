<?php
/**
 * Desc: 遍历书架的类，实现了Iterator
 * User: yinyinghui
 * Date: 2018/4/27
 * Time: 下午5:34
 */

class BookShelfIterators implements Iterators
{
    private $bookShelf;
    private $index = 0;

    public function __construct($bookShelf)
    {
        $this->bookShelf = $bookShelf;
    }

    public function hasNext()
    {
        if ($this->index < $this->bookShelf->getLength()) {
            return true;
        } else {
            return false;
        }
    }

    public function next()
    {
        $book = $this->bookShelf->getBookAt($this->index);
        $this->index ++;
        return $book;
    }
}