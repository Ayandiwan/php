<?php
session_destroy();
setcookie("uname","fff",time()-3);
header("Location:login.php");
?>