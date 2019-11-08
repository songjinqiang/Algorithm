<?php
/**
 * 01背包问题
 * User: songjq
 * Date: 2019/11/8
 * Time: 10:19
 */
class Package01{
    function BestValue($weight, $value, $capacity){
        $len = count($weight);
        return $this->Find($weight, $value, $capacity, $len-1);
    }
    function Find($weight, $value, $capacity, $index){
        if($index == 0 || $capacity<=0 ){
            return 0;
        }

        $res = $this->Find($weight, $value, $capacity, $index-1);
        if($weight[$index]<=$capacity){
            $resNext = $this->Find($weight, $value, $capacity-$weight[$index], $index-1)+$value[$index];
            $res = $resNext>$res?$resNext:$res;
        }
        return $res;
    }
}
$weight = [1,2,3,4,5];
$value = [2,4,6,8,10];
$capacity = 10;
$obj = new Package01();
echo $obj->BestValue($weight, $value, $capacity);