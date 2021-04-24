<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   rubls:<input type="text" name="rubls" />
   cop:<input type="text" name="cop" />
   amount of buns:<input type="text" name="buns" />
</form>
<?php 
	$rub=$_GET['rubls'];
	$cop=$_GET['cop'];
	$buns=$_GET['buns'];
	function calcThePrice($rub, $cop, $buns){
		$result_rub=$rub*$buns;
		if(($result_cop=$cop*$buns)>=100){
			$result_rub++;
			$result_cop-=100;
		}
		echo 'Amount of buns: '.$buns.' Total price: rubles: '.$result_rub.' kopek: '.$result_cop;
	}
	calcThePrice($rub, $cop, $buns);
?>