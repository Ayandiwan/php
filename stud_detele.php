<?php
	
	include"sequrity.php";
	include"hed.php";
	include"connection.php";
	echo"<font color=green size=10>Student Detail:</font>";
		
		//$qry="select*from student_info where `Reg No`='" . $_GET["rec"] . "'";
		$qry="select*from student_info where `Reg No`='".$_GET["qry"]."'";

	  $rc=mysqli_query($conn,$qry) or die("queery poblam");
	  $rec=mysqli_fetch_assoc($rc);
	 
	 ?>
	 <table border=1 align=center cellspacing=2 cellpadding=6>
	 
		<tr>
			<td>Regestion Number:</td>
			<td><?php echo$rec["Reg No"]?></td>
		
		</tr>
		
		<TR>
			<TD>Name:</td>
			<td><?php echo $rec["Name"] ?></td>
		</TR>
		<TR>
			<TD>Category:</td>
			<td><?php echo $rec["Category"] ?></td>
		</TR>
		
		<TR>
			<TD>BirthDate:</td>
			<td><?php echo $rec["BirthDate"] ?></td>
		</TR>
	 
	 
	 
	 <?
		include"footer.php";	
?>



