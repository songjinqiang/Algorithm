<?php
/**
 * 遍历打印文件及文件夹
 * User: songjq
 * Date: 2019/11/21
 * Time: 12:55
 */
class ListDictionary
{
    function List($path){
        if(is_dir($path)){
            $arr = scandir($path);
            foreach($arr as $handle){
                if($handle == '.'||$handle == '..'){

                }elseif(is_file($handle)){
                    echo 'file:'.$path.$handle.PHP_EOL;
                }else{
                    echo 'dictionary:'.$path.'/'.$handle.PHP_EOL;
                    $this->List($path.'/'.$handle);
                }
            }
        }
    }

    function ListNoLoop($path){
        if(is_dir($path)){
            $arr = scandir($path);
            foreach($arr as $handle){
                if($handle != '.' && $handle != '..'){
                    $sub_path = $path."/".$handle;
                    $temp = $this->getDirContent($sub_path);
                    $arr = array_merge($temp,$arr);
                }
            }
            return $arr;
        }
    }

    function getDirContent($path){
        if(!is_dir($path)){
            return false;
        }
        //readdir方法
        /* $dir = opendir($path);
        $arr = array();
        while($content = readdir($dir)){
          if($content != '.' && $content != '..'){
            $arr[] = $content;
          }
        }
        closedir($dir); */

        //scandir方法
        $arr = array();
        $data = scandir($path);
        foreach ($data as $value){
            if($value != '.' && $value != '..'){
                $arr[] = $value;
            }
        }
        return $arr;
    }
}
$obj = new ListDictionary();
$path = '/Users/songjq/PhpstormProjects/usercenter/www/uploads';
$obj->List($path);