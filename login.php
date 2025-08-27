
<form method=post Action=loginchk.php>
	<table align=center border=1>	
		<tr>
			<td>UserName</td>
			<td><input type=text name=txtname>
		</tr>
		
		<tr>
			<td>Password</td>
			<td><input type=password name=txtpass>
		</tr>
		
		<tr>
			<td></td>
			<td><input type=submit name=submit>
		</tr>
		
	</table>
</form>

<?php
	if(isset($_GET["err"])){
		echo"<font color=red>Unvalid UserName And Password</font>";
	}

?>