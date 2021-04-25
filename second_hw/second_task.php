<?php
	function PDO_PG_connect(){
		static $db_connection;
		if (is_null($db_connection)) {
			try {
			    $host = 'localhost';
			    $port = 5432;
			    $dbname = 'ITC';
			    $dsn = "pgsql:host=$host;port=$port;dbname=$dbname";
			    $username = 'postgres';
			    $passwd = 'dropit';

				$db_connection= new PDO($dsn, $username, $passwd);
			} catch (PDOException $e) {
				echo "Error!: " . $e->getMessage() . "<br />";
				die();
			}
		}
		return $db_connection;
	}
	try {
		$db_connection=PDO_PG_connect();
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