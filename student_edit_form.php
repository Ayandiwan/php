<?php
	//sesion_start();
	//session_start();
	include"sequrity.php";
	include"hed.php";
	include"connection.php";
	//$a=$_GET["qry"];
	$qry="select*from student_info where `Reg No`='".$_GET["qry"]."'";
	$rc=mysqli_query($conn,$qry)or die("qerey wrong");
	$rec=mysqli_fetch_assoc($rc)or die("problam");
	
	
	//$_SESSION["id"]=40;

	$arr=array("SC","ST","SEBC","GENREL",);
	
	 ?>
	 <form method=post action=student_edit_query.php>
	 <table border=1 align=center cellspacing=0 cellpadding=4>
	 
		<tr>
			<td>Regestion Number:</td>
			<td><input type=text name=txtregno readonly value=<?=($rec["Reg No"])?>></td>
		
		</tr>
		
		<TR>
			<TD>Name:</td>
			<td><input type=text name=txtname value='<?=($rec["Name"])?>'</td>
		</TR>
		<TR>
			<TD>Category:</td>
			<td>
			<?php
			echo"<select name=cmbname>";
						foreach($arr as $v)
						{
							if ($v==$rec["Category"])
								echo "<option selected>$v</option>";
							else
								echo "<option>$v</option>";
							
						}
				echo"</select>";
				
				
				?>
			
			</td>
		</TR>
		
		<TR>
			<TD>BirthDate:</td>
			<td><input type=date name=txtbdate value='<?=($rec["BirthDate"])?>'</td>
		</TR>
		
		<TR>
			<TD></td>
			<td><input type=submit name=submit></td>
		</TR>
		
	 
 
	 <?
		include"footer.php";	
?>



