<?php
include"sequrity.php";
	session_start();
	
	setcookie("uname","00",time()-8);
	session_destroy();
	header("Location:login.php");	
?>