<?php

namespace traits;

trait Voucher
{
    public function get(string $key)
    {
        $voucherList = include 'config/VoucherTypeList.php';
        if(isset($voucherList[$key])){
            return $voucherList[$key];
        }
        throw new \ErrorException("key doesn't exit");
    }
}