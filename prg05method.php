<?php
	echo "<br>Welcome ".$_REQUEST["txtname"];
	
	echo "<br>GET";
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";

	echo "<br>POST";
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	
	echo "<br>REQUEST";
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
	
	
?>