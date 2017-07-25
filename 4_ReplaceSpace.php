<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 2017/7/25
 * Time: 上午9:33
 */

function replaceSpace(string $str)
{
    return str_replace(' ', '%20', $str);
}

echo replaceSpace('We are happy.');