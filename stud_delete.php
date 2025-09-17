<?php
		
	include"sequrity.php";
	include"hed.php";
	include"connection.php";
	
	$qry="delete from student_info where `Reg No`='".$_GET["qry"]."'";
	
	mysqli_query($conn,$qry);
	header("Location:Student.php");
	include"footer.php";

	
?>


