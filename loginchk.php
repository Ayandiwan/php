<?php

session_start();
include"connection.php";
$uname=$_POST["txtname"];
$userpass=$_POST["txtpass"];
$qry="select*from userlist where Name='$uname' And Password='$userpass'";
$rs=mysqli_query($conn,$qry) or die("queery problam");
//$rec=mysqli_fetch_assoc($rs);

if(mysqli_num_rows($rs)==1){
	setcookie("uname","$uname");
	$_SESSION["uid"]=8;
	header("Location:welcome.php");
}
else{
	header("Location:login.php?err=1");

}

?>