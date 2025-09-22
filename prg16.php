<?php
	echo "<br>Date:".date("w");
	echo "<br>Date:".date("d-m-Y h:i:s");
	echo "<br>Time Stamp:".time();
	
	$tm=mktime(0,0,0,11,27,2024);
	echo "<br>Date:".date("d-m-Y h:i:s",$tm);
	
?>