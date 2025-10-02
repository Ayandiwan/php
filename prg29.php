<?php
	echo "<br>File Handling";
	$fp=fopen("data.txt","r");
	if(!$fp)
		die("<font color=red>File does not open</font>");
	
	while($str=fgets($fp))
	{
		echo "<br>".$str;
	}
		
?>