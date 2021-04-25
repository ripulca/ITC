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
		if (!is_int($num=+$num)) {
			echo "gg wp";
			return;
		}
		if(2<=$num && $num<=2*10**5){
			function is_primal($num){
				if($num==2 || $num==3){
					return "prime";
				}
				else{
					for($i=1;$i<=floor(sqrt($num));$i++){
						if(($num%$i)==0 && $i!=1 && $i!=$num){
							return "composite";
						}
					}
					return "prime";
				}
			}
			echo is_primal($num);
		}
		else{
			echo "enter integer number that bigger than 2";
		}
	}
?>