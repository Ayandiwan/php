<?php
	$arr=array(12,35,54,78,97,104,108,116,148,189);
	$tot=count($arr);
	print_r($arr);
	$qno[]=rand(0,$tot-1);
	
	while(count($qno)<$tot)
	{
		$num=rand(0,$tot-1);
		if (!in_array($num,$qno))
		{
			$qno[]=$num;
		}
	}
	echo "<pre>";
	print_r($qno);
	
?>