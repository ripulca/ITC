<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   first_name:<input type="text" name="input1" />
   last_name:<input type="text" name="input2" />
   patronymic:<input type="text" name="input3" />

   <button type="submit">Send</button>
</form>
<?php
	$input_1=$_GET['input1'];
	$input_2=$_GET['input2'];
	$input_3=$_GET['input3'];
	function concat($first_name, $last_name, $patronymic){
		echo 'result(last_name first_name patronymic): '.$last_name.' '.$first_name.' '.$patronymic;
	}
	concat($input_1,$input_2,$input_3);
?>