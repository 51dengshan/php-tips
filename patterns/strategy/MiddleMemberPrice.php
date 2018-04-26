<?php
/**
 * Desc: 中级会员价格策略，打九折
 * User: yinyinghui
 * Date: 2018/4/25
 * Time: 下午5:21
 */

class MiddleMemberPrice implements MemberPrice
{
    public function calPrice($price)
    {
        return 0.9 * $price;
    }
}