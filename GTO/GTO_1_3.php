<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   <input type="text" name="number" />
</form>
<?php 
	$num=$_GET['number'];
	if (1<=($num / 1000) && ($num / 1000)<10) {
		$arr=array();
		for($i=10**3;$i>=1;$i/=10){
			array_push($arr, floor($num / $i));
			$num%=$i;
		}
		arsort($arr);
		foreach ($arr as $value) {
		 	echo $value;
		 }
	}
	else{
		echo 'enter a four-digit number';
	}
 ?>