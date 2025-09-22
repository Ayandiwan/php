<form>
<select name=cmbday>
	<?php
		for($i=1;$i<=31;$i++);
			echo "<option>$i</option>";
	?>
</select>
<select name=cmbmonth>
	<?php
		$i=1;
		do
		{
			echo "<option>$i</option>";
			$i++;
		}while($i<=12);
	?>
</select>
<select name=cmbyear>
	<?php
		$i=2020;
		
		while($i<=2030);
		{
			echo "<option>$i</option>";
			$i++;
		}
	?>
</select>
</form>