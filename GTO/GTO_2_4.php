<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   <input type="text" name="year" />
</form>
<?php 
	if(isset($_GET['number'])){
		$year=$_GET['year'];
		if(!is_numeric($year)){
			echo "gg wp";
			return;
		}
		if (!is_int($year=+$year)) {
			echo "gg wp";
			return;
		}
		if(1000<=$year && $year<=9000){
			$year++;
			for ($i=$year; $i<9999 ; $i++) {
				$year_digits=array();
				$temp=array();
				$year=$i;
				for($j=10**3;$j>=1;$j/=10){
					array_push($year_digits, (int)floor($year / $j));
					$year%=$j;
				}
				$temp=$year_digits;
				$temp=array_unique($temp);
				if(count($temp)==count($year_digits)){
					$temp=implode($temp);
					echo $temp;
					break;
				}
			}
		}
		else {
			echo "enter number bigger than 1000 and less than 9000";
		}
	}
?>