<?php
	echo "<br>File Handling";
	$fp=fopen("student.txt","a");
	if(!$fp)
		die("<font color=red>File does not open</font>");
	
	$str="Rakesh\nSagar\nMilan\n";
	fwrite($fp,$str);
		
	fclose($fp);
	
?>