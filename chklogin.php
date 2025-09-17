<?php
session_start();
include"connection.php";

$uname=$_POST["txtuser"];
$upass=$_POST["uspass"];

$qry="select*from userdetail where name='$uname' and password='$upass'";

$rs=mysqli_query($conn,$qry);

if(mysqli_num_rows($rs)==1){
	setcookie("uname",$uname);
	$_SESSION["id"]=40;
	
	header("Location:welcome.php");
}
else{
		header("Location:login.php?err=1");
}

?>