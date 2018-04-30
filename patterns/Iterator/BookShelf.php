<?php
/**
 * Desc: 书架的类
 *       将该类作为集合处理，所以实现了Aggregate的接口
 * User: yinyinghui
 * Date: 2018/4/27
 * Time: 下午5:29
 */

class BookShelf implements Aggregate
{
    private $books = array();
    private $max = 1000;

    public function __construct($max)
    {
        if(!empty($max)) {
            $this->max = $max;
        }
    }

    public function getBookAt($index)
    {
        if($index < -1 || $index >= $this->max) {
            throw new Exception("index variable illegal!");
        }

        return $this->books[$index];
    }

    public function appendBook($book)
    {
        if (count($this->books) >= 1000) {
            throw new Exception("Beyond the max length.Don't add!");
        }

        $this->books[] = $book;
    }

    public function getLength()
    {
        return count($this->books);
    }


    public function getIterator()
    {
        return new BookShelfIterators($this);
    }
}