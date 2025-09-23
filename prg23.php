<?php
	$str="College of Agril Info Tech";
	$eml="abc.pqr@xyzcom.";
	
	$s="Hello How Are You? I am fine";
	$s=strtolower($s);
	echo "<br>".$str;
	echo "<br>".strpos($str,"o");
	echo "<br>".strpos($str,"o",10);
	echo "<br>".strpos($str,"Info");
	echo "<br>".strrpos($str,"o");
	echo "<br>".strstr($eml,"@");
	echo "<br>".strstr($eml,".");
	echo "<br>".strrchr($eml,".");
	echo "<br>".$s;
	echo "<br>".str_replace("o","OO",$s);
	$arr=array('a','e','i','o','u');
	$arr1=array('A','E','I','O','U');
	echo "<br>".str_replace($arr,"",$s);
	echo "<br>".str_replace($arr,$arr1,$s);
	
	$num="46389.938274";
	echo "<br>".$num;
	echo "<br>".round($num,2);
	echo "<br>".round($num,3);
	
	echo "<br>".round($num,-2);
	echo "<br>".round($num,-3);
	
	
	echo "<br>".base_convert("12",10,6);
	echo "<br>".base_convert("20",6,10);
	
	
?>