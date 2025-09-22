<?php
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
	$billamt=0;
	$billamt=$billamt+$_GET["optroom"];

	$billamt=$billamt+$_GET["chkbreakfast"];

	$billamt=$billamt+$_GET["chklunch"];
	
	$billamt=$billamt+$_GET["chkdinner"];
	
	$billamt=$billamt*$_GET["cmbday"];
	echo "<br><b>Bill Amount:=$billamt </b>";
?>
