<HTML>
<BODY>
	<FORM method=get action=prg09c.php>
	<TABLE border=0 cellpadding=4>
		<tr>
			<td>Enter Name:</td>
			<td><input type=text name=txtname></td>
		</tr>
		<tr>
			<td>Room Type:</td>
			<td>
				<input type=radio name=optroom value=3500 checked> AC Room (Rs.3500)
				<input type=radio name=optroom value=2000> Non AC Room (Rs. 2000)
			</td>
		</tr>
		<tr>
			<td>Food:</td>
			<td>
				<input type=checkbox name=chkbreakfast value=100> Breakfast (Rs. 100)
				<input type=checkbox name=chklunch value=200> Lunch (Rs. 200)
				<input type=checkbox name=chkdinner checked value=300> Dinner (Rs. 300)
			</td>
		</tr>
		<tr>
			<td>Days:</td>
			<td>
				<select name=cmbday>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</td>
		</tr>
		
		<tr>
			<td colspan=2 align=center><input type=submit name=s1></td>
		</tr>
		
	</TABLE>
	</FORM>
</BODY>
</HTML>