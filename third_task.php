<?php
	$mas=[];
	for($i=0;$i<50;$i++){
		array_push($mas,mt_rand());
	}
	echo "\n";
	var_dump($mas)."\n";
	echo "min ".(min($mas)."\n");
	echo "max ".(max($mas)."\n");
	echo "avg ".(array_sum($mas)/count($mas));
?>