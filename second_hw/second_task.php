<?php
	try {
		$db_connection= new PDO("pgsql:host=localhost;port=5432;dbname=ITC", "postgres", "dropit");
	    $sql = 'Select * FROM posts';
	    echo '<pre>';
	    foreach ($db_connection->query($sql) as $row) {
		        echo "<br>";
		        echo sprintf("%d - %s , %s , %s<br>", $row['id'], $row['title'], $row['content'], $row['date']);
	    }
	    $db_connection=null;
	} catch (PDOException $e) {
	    echo "Error!: " . $e->getMessage() . "<br />";
		die();
	}
?>