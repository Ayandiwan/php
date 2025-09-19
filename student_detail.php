<?php

include"sequrity.php";
include"hed.php";
include"connection.php";

//$qry="select * from student_info where Reg No='".$_GET["rec"]."'";
	$qry="select * from stud_info where Reg No=".$_GET["rec"]."";


$rc=mysqli_query($conn,$qry);


include"footer.php";

?>


