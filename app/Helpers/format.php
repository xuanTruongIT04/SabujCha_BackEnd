<?php

if (!function_exists('currencyFormat')) {
    function currencyFormat($number, $suffix = ' VNĐ')
    {
        $ckg = 23674.5;
        if (!empty($number))
            return number_format($number * $ckg) . $suffix;
        return "<span class='text-muted'>Chưa cập nhật</span>";

    }

    function totalSaleFormat($number)
    {
        $ckg = 23674.5;
        if (!empty($number))
            return number_format($number * $ckg);
        return number_format(0);

    }
}