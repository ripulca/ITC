<form action="<?=$_SERVER['PHP_SELF']?>">
   array lenth:<input type="text" name="len" />
   array:<input type="text" name="arr" />
   <button type="submit">Send</button>
</form>
<?php 
	if(isset($_GET['len'])&& isset($_GET['arr'])){
		$len=$_GET['len'];
		$arr=$_GET['arr'];
		if (!is_numeric($len)) {
			echo "gg wp";
			return;
		}
		if (!is_int($len=+$len)) {
			echo "gg wp";
			return;
		}
		$arr=explode(' ', $arr);
		foreach ($arr as $value) {
			if(!is_numeric($value)){
				echo "gg wp";
				return;
			}
			if(!is_int($value=+$value)){
				echo "gg wp";
				return;
			}
		}
		if ($len!=count($arr)) {
			echo "gg wp";
			return;
		}
		if(0<$len && $len<=100 && (count($arr)==$len)){
			for($i=0;$i<$len;$i++) {
				if(abs($arr[$i])>100){
					echo "array values must be less that 100 modulo";
					break;
				}
				if(in_array(-$arr[$i], $arr)){
					echo $i.' ';
				}
			}
		}
	}
 ?>