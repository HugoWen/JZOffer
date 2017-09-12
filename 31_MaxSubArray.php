<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 2017/9/12
 * Time: 上午10:28
 */

/**
 * 最大子数组求和
 * 找一个数组中拥有最大和的子数组，返回其和
 */

function MaxSubArray(array $array)
{
    if (!$array) {
        return 0;
    }

    $sum = 0;
    $max = 0;
    foreach ($array as $i => $val) {
        $sum += $val;

        if ($sum <= 0) {
            $sum = 0;
        }

        if ($sum > $max) {
            $max = $sum;
        }
    }

    if ($max === 0) {
        $max = max($array);
    }

    return $max;
}

$data = [1, -2, 3, 10, -4, 7, 2, -5];
$data2 = [-2, -8, -1, -5, -9];
$data3 = [2, 8, 1, 5, 9];

var_dump(MaxSubArray($data));
