<?php
/**
 * Desc: 高级会员价格策略，打八折
 * User: yinyinghui
 * Date: 2018/4/25
 * Time: 下午5:23
 */

class HighMemberPrice implements MemberPrice
{
    public function calPrice($price)
    {
        return 0.8 * $price;
    }
}