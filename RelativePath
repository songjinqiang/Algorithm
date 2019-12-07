<?php
class FilePath
{
	function getRelativePath($path1,$path2){
		$arrPath1 = explode('/',$path1);
		$arrPath2 = explode('/',$path2);
		$countPath1 = count($arrPath1)-1;
		$countPath2 = count($arrPath2)-1;
		$path = '';
		while($countPath2>$countPath1){
			$path .= '../';
			$countPath2--;
		}
		$cur = $countPath2-1;
		for($i=$countPath2-1;$i>0;$i--){
			if($arrPath1[$i]!=$arrPath2[$i]){
				$cur--;
				$path .= '../';
			}else{
				for($j=$i-1;$j>0;$j--){
					if($arrPath1[$i]==$arrPath2[$i]){
						continue;
					}else{
						$haveError = 1;
						break;
					}
				}
				if($haveError == 1){
					$path .= '../';
				}else{
					break;
				}
			}
		}
		for($k=$cur+1;$k<=$countPath1;$k++){
			if($k==$countPath1){
				$last .= $arrPath1[$k];
			}else{
				$last .= $arrPath1[$k].'/';
			}
			
		}
		$path .= $last;
		echo $path;

	}
}
$obj = new FilePath();
$path1='/a/b/c/d/e.php';
$path2='/a/b/g/h/j/c.php';
$obj->getRelativePath($path1,$path2);
