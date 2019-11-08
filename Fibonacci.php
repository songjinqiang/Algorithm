<?php
/**
 * 斐波那契数列 1,1,2,3,5,8...
 * User: songjq
 * Date: 2019/11/8
 * Time: 14:35
 */
class Fibonacci{
    function LastNumber($n)
    {
        if ($n == 1 || $n == 2) {
            return 1;
        }
        $res = 0;
        if ($n >= 3) {
            $res = $this->LastNumber($n - 1) + $this->LastNumber($n - 2);
        }
        return $res;
    }

    function Dynamic($n)
    {
        $first  = 1;
        $second = 1;
        $tmp    = 0;
        for ($i = 3; $i <= $n; $i++) {
            $tmp    = $first + $second;
            $first  = $second;
            $second = $tmp;
        }
        return $tmp;
    }
}
$obj = new Fibonacci();
$n = 35;
//echo $obj->LastNumber($n);
echo $obj->Dynamic($n);