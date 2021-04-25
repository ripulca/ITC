<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   <input type="text" name="number" />
</form>
<?php 
	$max_num=$_GET['number'];
	if(0<$max_num && $max_num<10**6){
		foreach (range(0, $max_num) as $num) {
			$counter=10;
			while ($num>$counter) {
				$counter*=10;
			}
			if((($num**2) % $counter) == $num){
				echo $num.' ';
			}
		}
	}
	else{
		echo 'enter a number less than 10^6';
	}
 ?>