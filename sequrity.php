<?php

	session_start();
	if ((!(isset($_COOKIE["uname"]))) || (!(isset($_SESSION["id"]))))
	{
		//die("<font color=red>Invalid User for this operation</font>");
		header("Location: login.php");
	}

?>