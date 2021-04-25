<form method="POST" action="<?=$_SERVER['PHP_SELF']?>">
   title:<input type="text" name="title" />
   content:<input type="text" name="content" />
   date:<input type="date" name="date" />

   <button type="submit">Send</button>
</form>
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
		if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['date'])){
			$title=$_POST['title'];
			$content=$_POST['content'];
			$date=$_POST['date'];
			$db_connection=PDO_PG_connect();
		    $sql = "INSERT INTO posts(title, content, date)VALUES(:title,:content,:date)";
		    $proc=$db_connection->prepare($sql);
	        $proc->bindParam(':title', $title);
	        $proc->bindParam(':content', $content);
	        $proc->bindParam(':date', $date);
		    $proc=$proc->execute();
		    if($proc){
				$sql = 'Select * FROM posts';
				echo '<pre>';
				foreach ($db_connection->query($sql) as $row) {
			        echo "<br>";
			        echo sprintf("%d - %s , %s , %s<br>", $row['id'], $row['title'], $row['content'], $row['date']);
				}
			}
			$db_connection=null;
		}
	} catch (PDOException $e) {
	    echo "Error!: " . $e->getMessage() . "<br />";
		die();
	}
?>