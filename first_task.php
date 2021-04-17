<?php
	$input=mt_rand();
	function secInDays($days){
		echo $days."\n";
		return $days*86400;
	}
	echo secInDays($input);
?>