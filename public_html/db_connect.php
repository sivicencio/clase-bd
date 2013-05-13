<?php
	try {
		$db = new PDO("pgsql:dbname=grupo20;host=localhost", "grupo20", "MDA0MGQy" );	
	} catch(PDOException $e) {
		echo $e->getMessage();
	}
	?>
