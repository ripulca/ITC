<form method="GET" action="<?=$_SERVER['PHP_SELF']?>">
   id: <input type="text" name="id" />
   <input type='submit' value='Upload'>
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
		$db_connection=PDO_PG_connect();
        if (isset($_POST['title']) && isset($_POST['content']) && isset($_POST['date'])) {
	        $title = $_POST['title'];
	        $content = $_POST['content'];
	        $date = $_POST['date'];
	        $id = $_POST['read_id'];

	        $sql = "UPDATE posts SET title=:title, content=:content, date=:date WHERE id=:id";
	        $proc = $db_connection->prepare($sql);
	        $proc->bindParam(':id', $id);
	        $proc->bindParam(':title', $title);
	        $proc->bindParam(':content', $content);
	        $proc->bindParam(':date', $date);
	        $proc->execute();
		    $sql = 'Select * FROM posts';
		    echo '<pre>';
		    foreach ($db_connection->query($sql) as $row) {
			        echo "<br>";
			        echo sprintf("%d - %s , %s , %s<br>", $row['id'], $row['title'], $row['content'], $row['date']);
		    }
		    $id=null;
	    }
		if (isset($_GET['id'])) {
	        try {
	            $id = $_GET['id'];
	            if (!is_int($id = +$id) || $id <= 0) throw new Exception("Неверное id");

	            $sql = "SELECT * FROM posts WHERE id=:id";
	            $proc = $db_connection->prepare($sql);
	            $proc->bindParam(':id', $id);
	            $proc->execute();

	            $row = $proc->fetch(PDO::FETCH_LAZY);
	            echo <<< _END
				<form method="POST" action="fourth_task.php">
				    <input type='text' name='read_id' value="$row[0]" readonly>
				    <br><br>
				    <input type='text' name='title' value="$row[1]">
				    <br><br>
				    <textarea name='content'>$row[2]</textarea>
				    <br><br>
				   <input type='date' name='date' value="$row[3]">
				    <br><br>
				    <input type='submit' value='Update'>
				</form>
				_END;
	        } catch (Exception $e) {
		    	echo "Error!: " . $e->getMessage() . "<br />";
	        }
	    }
	    $db_connection=null;
	} catch (PDOException $e) {
	    echo "Error!: " . $e->getMessage() . "<br />";
		die();
	}
?>