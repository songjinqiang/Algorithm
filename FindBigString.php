<?php
/**
 * 找出最大不重复字符串
 * User: songjq
 * Date: 2019/11/7
 * Time: 10:33
 */
class FindBigString
{
    //滑动窗口方式
    function MoveWindow($str){
        $len = strlen($str);
        $tmp = '';
        $res = 0;
        for($i=0; $i<$len; $i++){
            $check = strpos($tmp, $str[$i]);
            if($check===false){
                $tmp.=$str[$i];
            }else{
                $tmp.=$str[$i];
                $tmp = substr($tmp,$check+1);
            }
            $res = strlen($tmp)>$res?strlen($tmp):$res;
        }
        echo $res.','.$tmp.PHP_EOL;
    }
}

$obj = new FindBigString();
$str = 'pwwkew';
$obj->MoveWindow($str);