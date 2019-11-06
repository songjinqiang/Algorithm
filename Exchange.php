<?php
/**
 * 不增加内存实现两个变量替换
 * User: songjq
 * Date: 2019/11/5
 * Time: 17:33
 */
$a = 'aaaaaaa';
$b = 'bbbbbbb';
$a = $a^$b;
$b = $b^$a;
$a = $b^$a;
echo $a.PHP_EOL;
echo $b.PHP_EOL;