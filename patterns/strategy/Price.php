<?php
/**
 * Desc: 具体的策略类
 * User: yinyinghui
 * Date: 2018/4/25
 * Time: 下午5:27
 */


class Price
{
    private $strategyInstance;

    public function __construct($instance)
    {
        $this->strategyInstance = $instance;
    }

    public function quote($price)
    {
        return $this->strategyInstance->calPrice($price);
    }
}