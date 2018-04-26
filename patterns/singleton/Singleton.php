<?php
/**
 * Desc: 单例模式，表示只存在一个实例的类。典型的应用场景如：
 *       1.资源共享的情况下，避免由于资源操作时导致的性能或损耗等。如上述中的日志文件，应用配置。
 *       2.控制资源的情况下，方便资源之间的互相通信。如线程池等。
 * User: yinyinghui
 * Date: 2018/4/26
 * Time: 上午11:13
 */

class Singleton
{
    private static $_instance;

    private function __construct()
    {
        //在此可以放置应用代码
    }

    private function __clone()
    {
    }

    public static function getInstance()
    {
        if(!self::$_instance instanceof self) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }

    public function test($n)
    {
        echo "This is a singleton test $n !<br />";
    }
}