<?php
//include"sequrity.php";
include"hed.php";

?>
<form method=post Action=PasswordchangQuery.php>
	<table>
		<tr>
			<td>Current Password</td>
			<td><input type=Password name=txtcurpass>
		</tr>
		
		<tr>
			<td>New Password</td>
			<td><input type=Password name=txtnewpass>
	
		</tr>
		
		
		<tr>
			<td>repete new</td>
			<td><input type=Password name=repeatnewpass>
	
		</tr>
			
			<td></td>
			<td><input type=submit name=submit></td>
	
			</tr>
		
	</table>
</form>

<?php
	include"footer.php";
?>