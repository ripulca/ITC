<?php
	$mas=array(); $min=2000; $max=0; $sum=0; $avg=0;
	for($i=0;$i<50;$i++){
		array_push($mas,mt_rand(-1000,1000));
	}
	echo "\n";
	var_dump($mas)."\n";
	for($i=0;$i<50;$i++){
		if($mas[$i]>$max){
			$max=$mas[$i];
		}
		$sum+=$mas[$i];
	}
	for($i=0;$i<50;$i++){
		if($mas[$i]<$min){
			$min=$mas[$i];
		}
	}
	echo "min ".($min."\n".min($mas)."\n");
	echo "max ".($max."\n".max($mas)."\n");
	echo "avg ".($sum/count($mas));
?>