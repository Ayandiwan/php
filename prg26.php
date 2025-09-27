<?php
	echo "<br>File Handling";
	$fp=fopen("data.txt","r");
	if(!$fp)
		die("<font color=red>File does not open</font>");
	
	$size=filesize("data.txt");
	echo "<br>File Size:".$size;
	$str=fread($fp,$size);
	
	echo "<br>".nl2br($str);
	
?>