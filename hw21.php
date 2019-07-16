<?php
//3 names
$a= "mahmud";
$b = "sayed";
$c = "ifty";

$as= strlen($a)."</br>";
$bs= strlen($b)."</br>";
$cs = strlen($c)."</br>";

$result = fm($as,$bs,$cs);
echo $result;
echo "</br>";
echo "</br>";
function fm($one,$two,$three){
	if($one<$two && $one<$three){
		echo "mahmud is shortest";
	}
	elseif($two<$one && $two<$three){

		echo "sayed is shortest";
	}
	else {

		echo "ifty is shortest";
	}

}
if ($as%2==0){
	echo $a." you are general"."</br>";
}
else{

	echo $a. " you are different"."</br>";
}
if ($bs%2==0){
	echo $b." you are general"."</br>";
}
else{

	echo $b. " you are different"."</br>";
}
if ($cs%2==0){
	echo $c." you are general"."</br>";
}
else{

	echo $c. " you are different"."</br>";
}

?>	