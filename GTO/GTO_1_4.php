<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   path from home to first shop:<input type="text" name="path_1" />
   path from home to second shop:<input type="text" name="path_2" />
   path from first shop to second shop:<input type="text" name="path_3" />
</form>
<?php 
	$path_1=$_GET['path_1'];
	$path_2=$_GET['path_2'];
	$path_3=$_GET['path_3'];
	echo 'minimal path: '.min($path_1+$path_2+$path_3,2*($path_1+$path_2),2*($path_1+$path_3),2*($path_2+$path_3));
 ?>