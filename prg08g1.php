	<font color=blue>
	less than 5000		5%	<br>
	5000 to 10000		10%	<br>
	10001 t0 20000		20%	<br>
	more than 20000		30%	<br>
	<br></font>
<?php
	//print_r($_GET);
	$amt=$_GET["txtamt"];
	echo "<br>Amount:=".$amt;
	$disc=0;
	if ($amt>20000)
	{
		$disc=$amt*0.30;
	}
	else if ($amt>10000)
	{
		$disc=$amt*0.20;
	}	
	else if ($amt>=5000)
	{
		$disc=$amt*0.10;
	}	
	else
	{
		$disc=$amt*0.05;
	}	
	echo "<br>Discount:=".$disc;
	$netpay=$amt-$disc;
	echo "<br>Net payable amount:=".$netpay;
	
	
?>