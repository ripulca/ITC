<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   path from home to first shop:<input type="text" name="path_1" />
   path from home to second shop:<input type="text" name="path_2" />
   path from first shop to second shop:<input type="text" name="path_3" />
   <button type="submit">Send</button>
</form>
<?php 
	if(isset($_GET['path_1'])&& isset($_GET['path_2'])&& isset($_GET['path_3'])){
		$path_1=$_GET['path_1'];
		$path_2=$_GET['path_2'];
		$path_3=$_GET['path_3'];
		if (!(is_numeric($path_1)&& is_numeric($path_2)&& is_numeric($path_3))) {
			echo "gg wp";
			return;
		}
		if(is_int($path_1=+$path_1)&& is_int($path_2=+$path_2)&& is_int($path_3=+$path_3)){
			echo 'minimal path: '.min($path_1+$path_2+$path_3,2*($path_1+$path_2),2*($path_1+$path_3),2*($path_2+$path_3));
		}
	}
 ?>