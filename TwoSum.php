<?php
/**
 * 找出和为给定值的两个数
 * User: songjq
 * Date: 2019/11/7
 * Time: 11:16
 */
class TwoSum
{
    function find($arr, $target){
        $len = count($arr);
        for($i=0; $i<$len; $i++){
            $first = $arr[$i];
            $second = $target-$first;
            for($j=$i+1; $j<$len; $j++){
                if($second == $arr[$j]){
                   echo $i.','.$j.PHP_EOL;
                }
            }
        }
    }
}

$target = 5;
$arr = [1,3,2,4,6];
$obj = new TwoSum();
$obj->find($arr, $target);