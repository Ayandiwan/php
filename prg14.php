<?php
	function drawLine($ch,$cnt=80)
	{	
		echo "<br>";
		for ($i=1;$i<=$cnt;$i++)
		{
			echo $ch;
		}
		
	}
	function sqrcalc($num)
	{
		$ans=$num*$num;
		return $ans;
	}
	function cubecalc(&$num)
	{
		$ans=$num*$num*$num;
		$num=$num+100;
		echo "<br>Cube:=".$ans;
	}
	
	echo "<br><b>UDF: User Define Function</b>";
	drawLine("-");
	
	echo "<br>Hello";
	echo "<br>Hello";
	echo "<br>Hello";
	echo "<br>Hello";
	drawLine("%");
	drawLine("-",90);
	drawLine("#",50);
	sqrcalc(5);
	//X2+y2-9
	$ans=sqrcalc(5)+sqrcalc(4)-9;
	echo "<br>Ans:=".$ans;
	$n=9;
	cubecalc($n);
	echo "<br>N:=".$n;
	
?>