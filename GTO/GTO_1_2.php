<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   rubls:<input type="text" name="rubls" />
   cop:<input type="text" name="cop" />
   amount of buns:<input type="text" name="buns" />
   <button type="submit">Send</button>
</form>
<?php 
	if(isset($_GET['rubls'])&& isset($_GET['cop'])&& isset($_GET['buns'])){
		$rub=$_GET['rubls'];
		$cop=$_GET['cop'];
		$buns=$_GET['buns'];
		if (!(is_numeric($rub)&& is_numeric($cop)&& is_numeric($buns))) {
			echo "gg wp";
			return;
		}
		if(is_int($rub=+$rub)&& is_int($cop=+$cop)&& is_int($buns=+$buns)){
			function calcThePrice($rub, $cop, $buns){
				$result_rub=$rub*$buns;
				if(($result_cop=$cop*$buns)>=100){
					$result_rub++;
					$result_cop-=100;
				}
				echo 'Amount of buns: '.$buns.' Total price: rubles: '.$result_rub.' kopek: '.$result_cop;
			}
			calcThePrice($rub, $cop, $buns);
		}
	}
?>