<?php
/*
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
*/	
	$num=$_GET["txtnum"];
	
	echo "<br>Number :=".$_GET["txtnum"];
	$sqr=$num*$num;
	echo "<br>Square of $num is $sqr";
	
?>