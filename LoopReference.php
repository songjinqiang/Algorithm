<?php
/**
 * 循环引用 无法释放 进程结束或缓冲区超过10000释放
 * User: songjq
 * Date: 2019/11/7
 * Time: 16:54
 */
$arr=[1,2,3];
foreach($arr as &$v){

}
//$v = 'ssss';
foreach($arr as $v){
    var_dump($arr);
}
print_r($arr);