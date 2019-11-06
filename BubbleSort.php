<?php
/**
 * 冒泡排序
 * User: songjq
 * Date: 2019/11/6
 * Time: 18:07
 */
class BubbleSort{
    function Sort($arr){
        $len = count($arr);
        for($i=0; $i<$len; $i++){
            for($j=$i+1; $j<$len; $j++){
                if($arr[$i] < $arr[$j]){

                }else{
                    $temp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $temp;
                }
            }
        }
        return $arr;
    }

}
$arr = [2,3,1,5,4];
$obj = new BubbleSort();
$arrSorted = $obj->Sort($arr);
print_r($arrSorted);