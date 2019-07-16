<?php 
	
	
	$username = "taymur";
	$result = greetings($username, "ahmed");
	echo $result;
	function greetings($f_name, $l_name){
		 
		$welcome = "Welcome" ." " . $f_name  . " " . $l_name;
		return $welcome;
	}


	

	

?>

