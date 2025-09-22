<HTML>
<BODY>
	<FORM method=get action=prg10g.php>
	<TABLE border=0 cellpadding=4>
		<tr>
			<td>Number:</td>
			<td>
			<?php
				echo "<input type=text name=txtnum value=".rand(101,300)." readonly>";
			?>
			</td>
		</tr>
		<tr>
			<td>Answer:</td>
			<td>
				<input type=radio name=optans value=even> Even
				<input type=radio name=optans value=odd> Odd
			</td>
		</tr>
	
		<tr>
			<td colspan=2 align=center><input type=submit name=s1></td>
		</tr>
		
	</TABLE>
	</FORM>
</BODY>
</HTML>