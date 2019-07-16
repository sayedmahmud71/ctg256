<?php 
// find max

$a=2;
$b=4;
$c=6;
$result = fm($a,$b,$c);
echo $result;
function fm($one,$two,$three){
	if($one>$two && $one>$three){
		return $one;
	}
	elseif($two>$one && $two>$three){

		return $two;
	}
	else {

		return $three;
	}


}







 ?>