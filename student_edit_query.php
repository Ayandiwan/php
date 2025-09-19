<?php

	include"sequrity.php";
	include"hed.php";
	include"connection.php";
	
	
	$regno=$_POST["txtregno"];
	//$a=$_GET["qry"];
	$nm=$_POST["txtname"];
	$cater=$_POST["cmbname"];
	$bdate=$_POST["txtbdate"];

	
//$qry="update student_info set `Reg No`= '2' WHERE Name = 'gi'";
$qry = "update student_info set Name='$nm',Category='$cater',BirthDate='$bdate' where `Reg No`='".$regno."'";


//UPDATE Customers SET PostalCode = 00000 WHERE Country = 'Mexico';
	
	mysqli_query($conn,$qry) or die("querry pobma");
	header("Location:Student.php");

	include"footer.php";	
?>
