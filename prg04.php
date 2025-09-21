<HTML>
<BODY>
	Variable<br>
	<?php
		include "header.php";
		$name="cait";
		echo "<br>Name:=".$name;
		
		$$name="Anand";	//$cait="Anand"
		
		echo "<br>cait:=".$cait;
		echo "<br>cait:=".${$name};
		
	?>
</BODY>
</HTML>