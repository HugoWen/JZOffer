<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 2017/7/26
 * Time: 下午2:07
 */

function fibonacci(int $n = 0)
{
    if ($n === 0) {
        return 0;
    }

    if ($n === 1) {
        return 1;
    }

    $arr = [0, 1];
    for ($i = 2; $i <= $n; $i ++) {
        $arr[$i] = $arr[$i - 2] + $arr[$i - 1];
    }

    return $arr[$n];
}

var_export(fibonacci(10));