<?php
	$str="College of AGRIL. info. Tech.";
	echo "<br>".strtolower($str);
	echo "<br>".strtoupper($str);
	echo "<br>".lcfirst($str);
	echo "<br>".ucwords($str);
	echo "<br>".ucwords(strtolower($str));
	
	$str="   CAIT     ";
	echo "<br>".strlen($str);
	echo "<br>".strlen(ltrim($str));
	echo "<br>".strlen(rtrim($str));
	echo "<br>".strlen(trim($str));
	$var="***CAIT*****ABCD";
	echo "<br>".strlen(trim($var,"*"));
	echo "<br>".substr($var,3);
	echo "<br>".substr($var,3,4);
	echo "<br>".substr($var,-3);
	echo "<br>".substr($var,-3,2);
	
	echo "<br>".strcmp("anil","Nil");
	echo "<br>".strcmp("anil","ANIL");
	echo "<br>".strcasecmp("anil","ANIL");
	
	
	
?>