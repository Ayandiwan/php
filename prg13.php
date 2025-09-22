<?php
	$arr1=array(11=>101,"Anil","OBC",56.9);
	echo "<pre>";
	print_r($arr1);
	$arr2= array("seatno"=>23,56,87,22=>34,"weight"=>85,232,65,90=>85,89,67,-103=>35,34,82);
	//print_r($arr2);
	
	$arr1["city"]="Anand";
	$arr1[14]="BTech";
	
	print_r($arr1);
	
	$stud[]=123;
	$stud[]=345;
	print_r($stud);
	echo "</pre>";
	echo "<br>Qualification:".$arr1[14];
	echo "<br>Location:".$arr1["city"];
	$arr1["city"]="Surat";
	echo "<br>Location:".$arr1["city"];
	
	foreach($arr1 as $val)
	{
		echo "<br>".$val;
	}
	
	foreach($arr1 as $k=>$v)
	{
		echo "<br>$k=".$v;
	}
	
?>