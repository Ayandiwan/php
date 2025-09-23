<?php
	$arr=array("f"=>30,"b"=>20,"c"=>60);
	print_r($arr);
	echo "<br>".sizeof($arr);
	echo "<br>".count($arr);
	echo "<br>";
	var_dump(in_array(120,$arr));
	echo "<br>";
	arsort($arr);
	print_r($arr);
	echo "<br>";
	asort($arr);
	print_r($arr);
	
	$key=array_keys($arr);
	echo "<br>";
	print_r($key);
	
	
?>