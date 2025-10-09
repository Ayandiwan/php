<?php
echo"<pre>";
$arr[]=rand(1,10);

for($i=1;$i<11;$i++){
	$number=rand(1,10);
	if(!in_array($number,$arr)){
		$arr[]=$number;
	}
}
print_r($arr);
echo"</pre>";

?>