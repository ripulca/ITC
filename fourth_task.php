<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   input:<input type="text" name="input" />
</form>
<?php
	$input=$_GET['input'];
	function reverse($str){
		$result='';
		for($i=strlen($str)-1;$i>=0;$i--){
			$result.=$str[$i];
		}
		var_dump($result);
	}
	reverse($input);
?>