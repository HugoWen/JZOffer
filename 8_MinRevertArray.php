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
        if ($arr[$mid] >= $arr[$start]) {
            $start = $mid;
        } else {
            $end = $mid;
        }
    }

    return $arr[$start];
}

$arr = [3, 4, 5, 6, 2, 3];
var_export(minRevertArray($arr));