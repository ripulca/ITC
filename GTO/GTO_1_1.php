<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   <input type="text" name="number" />
</form>
<?php 
	$num=$_GET['number'];
	if (abs($num)>100) {
		echo "enter a number greater than 100 modulo";
	}
	else{
		function squaring($number){
			return pow($number, 2);
		}
		echo squaring($num);
	}
?>