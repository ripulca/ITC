<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   <input type="text" name="number" />
</form>
<?php 
	if(isset($_GET['number'])){
		$num=$_GET['number'];
		if(!is_numeric($num)){
			echo "gg wp";
			return;
		}
		if (is_int($num=+$num)) {			
			if (abs($num)>100) {
				echo "enter a number greater than 100 modulo";
			}
			else{
				function squaring($number){
					return pow($number, 2);
				}
				echo squaring($num);
			}
		}
	}
?>