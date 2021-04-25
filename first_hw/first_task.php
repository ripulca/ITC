<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   <input type="text" name="input" />
</form>
<?php
	$input=$_GET['input'];
	function secInDays($days){
		echo "days: ".$days."\n";
		return $days*86400;
	}
	echo 'seconds in days: '.secInDays($input);
?>