<form action="<?=$_SERVER['PHP_SELF']?>">
   array lenth:<input type="text" name="len" />
   array:<input type="text" name="arr" />
</form>
<?php 
	$len=$_GET['len'];
	$arr=$_GET['arr'];
	$arr=explode(' ', $arr);
	foreach ($arr as $i => $value) {
		$arr[$i]=(int)$value;
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
 ?>