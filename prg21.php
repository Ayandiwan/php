<?php
	echo "<br><b>Variable Function</b>";
	
	$var="123.3567abc";
	echo "<br>".gettype($var);
	$v=floatval($var);
	echo "<br>".$var;
	echo "<br>".$v;
	
	unset($var);
	echo "<br>".$var;
	$arr=array(11,22,33);
	unset($arr[0]);
	echo "<br>".$arr[0];
	
	$strhere=<<<GJK
		<table border=1>
			<tr>
				<th><font color=red>Name</th>
			</tr>
		</table>
	GJK;
	
	echo $strhere;
?>