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
        return false;
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

$arr = [1, 0, 1, 1, 1];
var_export(minRevertArray($arr));