<?php
	echo "<br><b>For Loop</b>";
	
	for($cnt=10;$cnt<=5;$cnt++)
	{
		echo "<br>Welcome : $cnt";
	}

	echo "<br><b>Do...While Loop</b>";
	$cnt=10;
	do
	{
		echo "<br>Welcome : $cnt";
		$cnt++;
	}while($cnt<=5);
	
	
	echo "<br><b>While Loop</b>";
	$know=0;
	while($know==0)
	{
		echo "<br>Welcome";
		
		$know=rand(0,1);
		echo "<br>Do you remember? $know";
	}
	
	
?>