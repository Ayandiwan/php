<?php
	$m=3;
	$y=2024;
	$tm=mktime(0,0,0,$m,1,$y);
	$wday=date("w",$tm);
	
	echo "<table border=1 cellspadding=4>";
	echo "<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thr</th><th>Fri</th><th>Sat</th></tr>";
	$cnt=1;
	for ($r=1;$r<=5;$r++)
	{
		echo "<tr>";
		for ($c=1;$c<=7;$c++)
		{
			if ($r==1)
			{
				if ($c>$wday)
				{
					echo "<th>".$cnt."</th>";
					$cnt++;
				}
				else
					echo "<th></th>";
			}
			else
			{
				if (checkdate($m,$cnt,$y))
				{
					echo "<th>".$cnt."</th>";
					$cnt++;
				}
			}
		}
		echo "</tr>";
	}
	echo "</table>";
?>