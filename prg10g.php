<?php
	echo "<pre>";
	print_r($_GET);
	echo "</pre>";
	
	if($_GET["txtnum"]%2==0)
		$ans="even";
	else
		$ans="odd";
	
	if ($ans==$_GET["optans"])
		echo "<br><b>Answer is Correct</b>";
	else
		echo "<br><font color=red>Answer is Incorrect</font>";
	
?>
