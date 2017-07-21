<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 2017/7/21
 * Time: 上午11:24
 */

function search2DArray(array $arr, int $target)
{
    if (!$arr) {
        return false;
    }

    $row = count($arr) - 1;
    $col = count($arr[0]) - 1;

    // 边界
    if ($target < $arr[0][0] || $target > $arr[$row][$col]) {
        return false;
    }

    $limit_col = $col;
    for ($i = 0; $i <= $row; $i ++) {
        for($j = $limit_col; $j >= 0; $j --) {

            echo '$arr[' . $i .'][' . $j . '] ' . $arr[$i][$j] . "\n";

            if ($target === $arr[$i][$j]) {
                return true;
            } elseif ($target > $arr[$i][$j]) {
                $limit_row++;
                break;
            } else {
                $limit_col--;
                continue;
            }
        }
    }

    return false;

}

$arr = [
    [1, 2, 8, 9],
    [2, 4, 9, 12],
    [4, 7, 10, 13],
    [6, 8, 11, 15]
];

$target = 3;

echo search2DArray($arr, $target) ? 'true' : 'false';