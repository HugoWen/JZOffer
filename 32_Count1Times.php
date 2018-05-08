<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 2017/9/12
 * Time: 下午1:33
 */

/**
 * 面试题32：从1到n整数中1出现的次数
 * 题目： 输入一个整数，求从1到n这n个整数的十进制表示1出现的次数。例如输入12，从1到12这些整数中包含1的数字有1，10，11和12，1一共出现了5次
 */

function count1Times(int $n)
{
    $_count = function (int $len) {
        return pow(10, $len - 1);
    };

    if ($n < 1) {
        return 0;
    }

    $n_str = (string)$n;
    $length = strlen($n_str);
    $first = (int)$n_str[0];

    if ($length === 1) {
        return 1;
    }

    if ($first > 1) {
        $first_count = $_count($length);
    } else {
        $first_count = $n % $_count($length) + 1;
    }

    $second_count = $first * ($length - 1) * $_count($length - 1);
    $other_count = count1Times($n % $_count($length));

    return $first_count + $second_count + $other_count;
}

var_dump(count1Times(21345));