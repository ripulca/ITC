<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   input:<input type="text" name="input" />
</form>
<?php
	$input=$_GET['input'];
	function reverse($str){
		return strrev($str);
	}
	$res=reverse($input);
	echo 'output: '.$res;
?>