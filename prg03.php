<HTML>
<BODY>
	Variable<br>
	<?php
		include "header.php";
		$num1=200;
		$num2=100;
		echo "<br>Num1:=".$num1;
		echo "<br>Before Fun Call Num2:=".$num2;
		
		function test()
		{
			global $num2;
			$num1=11;	//local variable
			echo "<br>In Function Num1:=".$num1;
			echo "<br>In Function Num2:=".$num2;
			echo "<br>In Function Global Num1:=".$GLOBALS["num1"];
			$num2=9999;
		}
		
		test();
		echo "<br>After Fun Call Num2:=".$num2;
		
	?>
</BODY>
</HTML>