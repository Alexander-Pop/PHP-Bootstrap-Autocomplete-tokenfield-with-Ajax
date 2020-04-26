<?php
	define (DB_USER, "root");
	define (DB_PASSWORD, "root");
	define (DB_DATABASE, "test");
	define (DB_HOST, "localhost");

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	$sql = "SELECT name FROM tags 
			WHERE name LIKE '%".$_GET['query']."%'
			LIMIT 10"; 

	$result = $mysqli->query($sql);
	$json = [];

	while($row = $result->fetch_assoc()){
	     $json[] = $row['name'];
	}
	echo json_encode($json);

?>