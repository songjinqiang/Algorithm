<?php
/**
 * 快速排序
 * User: songjq
 * Date: 2019/11/8
 * Time: 09:26
 */
class Sort_Fast{
    function Fast($arr){
        $len = count($arr);
        if($len <= 1){
            return $arr;
        }
        $target = $arr[0];
        $leftArr = [];
        $rightArr = [];
        for($i=1; $i < $len; $i++){
            if($arr[$i]<$target){
                $leftArr[] = $arr[$i];

            }else{
                $rightArr[] = $arr[$i];
            }
        }
        $leftArr = $this->Fast($leftArr);
        $rightArr = $this->Fast($rightArr);
        $res = array_merge($leftArr, [$target], $rightArr);
        return $res;
    }
}

$arr = [1,3,2,5,4];
$obj = new Sort_Fast();
$res = $obj->Fast($arr);
print_r($res);