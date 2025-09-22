<?php
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
	$billamt=0;
	if ($_GET["optroom"]=="AC")
		$billamt=$billamt+3500;
	else
		$billamt=$billamt+2000;
	
	if (isset($_GET["chkbreakfast"]))
		$billamt=$billamt+100;

	if (isset($_GET["chklunch"]))
		$billamt=$billamt+200;
	
	if (isset($_GET["chkdinner"]))
		$billamt=$billamt+300;
	
	$billamt=$billamt*$_GET["cmbday"];
	echo "<br><b>Bill Amount:=$billamt </b>";
?>
