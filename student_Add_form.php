<?php
include"sequrity.php";
include"connection.php";
include"hed.php";	

?>
<form method=post Action=student_Add_Data.php >
	<table align=center>
	<b>
		<tr>
			<td>Regastion Number:</td>
			<td><input type=text name=txtreg 	></td>
		</tr>

		<tr>
			<td>Name:</td>
			<td><input type=text name=txtname></td>
		
		</tr>

		
		<tr>
				<td>Category</td>
			<td>
				<select name="cmbcate">
					
					<option value="OBC">OBC</option>
					<option  name="ST">ST</option>
					<option name="GENRAL">GENRAL</option>
					<option name="SC">SC</option>
					
					
				
				</select>
				
			</td>
		</tr>
		
			<tr>
				<td>BirthDate</td>
				<td><input type=date name=txtbdate></td>	
			
			</tr>
			
			<tr>
				<td></td>
				<td><input type=submit name=submit></td>	
			
			</tr>
			
			<tr>
				<td></td>
				<td align=right><a href=Student.php><input type=button name=b1 value="Back" ></a>	</td>	
			
			</tr>
				
			
	</table>
</form>

		<?php
		include"footer.php";
		?>