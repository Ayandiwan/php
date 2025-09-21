<HTML>
<BODY>
	Variable<br>
	<?php
		include "header.php";
		echo "Welcome <b>".$_COOKIE["uname"]."</b><br>";
		$seatno=142;
		$salary=45000;
		$per=67.8;
		$name="CAIT-AAU";
		
		echo "My Seat number is $seatno";
		echo '<br>My Seat number is '.$seatno;
		
		print "<br>Salary :=".$salary;
		print "<br>Percentage :=$per";
		
		//printf("My Seat number is ",seatno);
		
	

		
	?>
</BODY>
</HTML>