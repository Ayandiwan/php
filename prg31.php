<?php
echo "AD";
	echo "<br>File Handling";
	$fp=fopen("data.txt","r");
	if(!$fp)
		die("<font color=red>File does not open</font>");
	$s="Surat";
	$cnt=0;
	while($str=fgets($fp))
	{
		echo "<br>".$str;
		$arr=explode(",",$str);
		if($arr[2]==$s)
			$cnt++;
	}
	echo "<br>$s=$cnt";
	fclose($fp);
?>