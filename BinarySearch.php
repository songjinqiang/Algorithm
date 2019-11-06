<?php
/**
 * 二分查找
 * User: songjq
 * Date: 2019/11/6
 * Time: 17:47
 */
class BinarySearch{
    function Search($arr, $var){
        $low = 0;
        $high = count($arr);

        while($low < $high){
            $mid = floor(($low + $high)/2);
            if($var == $arr[$mid] ) return $mid;
            if($var > $arr[$mid] ) $low = $mid;
            if($var < $arr[$mid]) $high = $mid;
        }
    }
}

$arr = [1,2,3,4,5];
$var = 5;
$obj = new BinarySearch();
echo $obj->Search($arr, $var);