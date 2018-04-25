<?php
/**
 * Desc: 普通会员价格策略，不打折
 * User: yinyinghui
 * Date: 2018/4/25
 * Time: 下午5:19
 */
class PrimaryMemberPrice implements MemberPrice
{
    public function calPrice($price)
    {
        return $price;
    }
}