<?php
include"sequrity.php";
include"hed.php";

?>
<script language="JavaScript">
	function verify()
	{
		return confirm("Are You Sure?");
	}
</script>

	<center>
	<form method=get>
		Enter Name:
		<input type=text name=txtname>
		<input type=submit value="Search" name=s1>
	</form>
		<A href=student_Add_form.php>Add Student</A>
		</center>
<br>
<?php
include"connection.php";


if (isset($_GET["txtname"]))
		$qry="select * from student_info where Name like '".$_GET["txtname"]."%'";
	else
		$qry="select * from student_info";


$rs=mysqli_query($conn,$qry);
echo"<font color=red size=4>Total recodes:</font>".mysqli_num_rows($rs);	
echo"<table border=1 cellspacing=0 cellpadding=4 align=center>";
echo "<tr><th width=60>Reg No</th><th  width=150>Name</th><th width=100>Category</th><th width=90>Birth Date</th></tr>";
//$rec=mysqli_fetch_assoc($rs);

//print_r($rec);

	while($rec=mysqli_fetch_assoc($rs)){
			echo"<tr>";
			echo"<td align=center>".$rec["Reg No"]."</td>";
			echo"<td align=center>".$rec["Name"]."</td>";
			echo"<td align=center>".$rec["Category"]."</td>";
			echo"<td align=center>".$rec["BirthDate"]."</td>";	
			echo"<td><a href=stud_delete.php?qry=".$rec["Reg No"]." onclick='return verify();'>Delete</td>";	
			echo"<td><a href=stud_detele.php?qry=".$rec["Reg No"].">Detail</td>";	
			echo"<td><a href=student_edit_form.php?qry=".$rec["Reg No"].">Edit</a></td>";	
			



			}
echo"</table>";
include"footer.php";

?>