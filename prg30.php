<?php
	echo "<br>File Handling";
	$fp=fopen("data.txt","r");
	if(!$fp)
		die("<font color=red>File does not open</font>");
	
	while($ch=fgetc($fp))
	{
		if ($ch=="\n")
			echo "<br>";
		else
			echo $ch;
		
	}
		
?>