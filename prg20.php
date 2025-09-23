<?php
	echo "<form method=post action=prg20p.php>";
	echo "<table border=1>";
	echo "<b>Attendance</b>";
	$tot=rand(5,10);
	for($i=1;$i<=$tot;$i++)
	{
		echo "<tr>";
		echo "<th><input type=checkbox name=chk[] value=$i>";
		echo "<th>$i</th>";
		echo "<td>".chr($i+64)."</td>";
		echo "</tr>";
	}
	echo "</table>";
	echo "<br><input type=submit name=s1>";
	echo "</form>";
?>