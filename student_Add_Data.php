<?php
include"sequrity.php";
include"hed.php";
include "connection.php";


	$regno=$_POST["txtreg"];
	$nm=$_POST["txtname"];
	$cat=$_POST["cmbcate"];
	$bdate=$_POST["txtbdate"];
	
	$qry="insert into student_info values('$regno','$nm','$cat','$bdate')";
	
	mysqli_query($conn,$qry);
	header("Location: student.php");
	


include"footer.php";
?>