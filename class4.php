<?php 
//while
/*$i=0;
while($i<11){
	$j=$i+$i;
	echo "$i+$i=$j"."</br>";
	$i++;
}
//dowhile
echo "</br>";
echo "</br>";

$i = 0;
do{
	echo "hi";
	$i++;
}
while($i==0);

$i = "parents";
switch ($i) {
	case 'parents':
		echo "hi "."$i";
		break;
	case 'baby':
		echo "hello "."$i";
		break;
	case 'guest':
		echo "hello "."$i";
		break;	
	default:
		echo "tui chor";
		break;


		for ($i=5; $i >=1 ; $i--) { 
	echo "</br>";
		for ($j=1; $j <11 ; $j++) { 
			
			echo "$i x $j= ".($i*$j)."</br>";
			
		}
function greet($n){
	
	if($n!=0){
		$n--;
		greet($n);
		echo "colo jai<br>";
	}
}
greet(5);

		*/



function greet($n){

	if($n <= 5){

	echo "$n +";
	$j="";
	$j=$n+$n;
	$n++;
	greet($n);

	}
	else{
	echo "$j";
	}
}

greet(1);





 ?>