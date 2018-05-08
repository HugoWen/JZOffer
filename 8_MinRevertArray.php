<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 2017/7/26
 * Time: 上午9:44
 */

function minRevertArray(array $arr)
{
    if (!$arr) {
        return 0;
    }

    // 使用二分查找法
    $start = 0;
    $end = count($arr) - 1;

    while ($arr[$start] >= $arr[$end]) {

        if ($end - $start === 1) {
            return $arr[$end];
        }

        $mid = (int)(($start + $end) / 2);

        // start end mid 相等，无法继续判断
        if ($arr[$start] === $arr[$end] && $arr[$start] == $arr[$mid]) {
            return minArray($arr, $start, $end);
        }

        if ($arr[$mid] >= $arr[$start]) {
            $start = $mid;
        } else {
            $end = $mid;
        }
    }

    return $arr[$start];
}

function minArray(array $arr, int $start, int $end)
{
    $ret = $arr[$start];
    for ($i = $start + 1; $i <= $end; $i ++) {
        if ($ret > $arr[$i]) {
            $ret = $arr[$i];
        }
    }

    return $ret;
}

$arr = [6501,6828,6963,7036,7422,7674,8146,8468,8704,8717,9170,9359,9719,9895,9896,9913,9962,154,293,334,492,1323,1479,1539,1727,1870,1943,2383,2392,2996,3282,3812,3903,4465,4605,4665,4772,4828,5142,5437,5448,5668,5706,5725,6300,6335];
var_export(minRevertArray($arr));