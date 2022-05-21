<?php
	$connection = new mysqli(HOST, DB_USER, DB_PASSWORD, DB_NAME);

	// check connection
	if($connection->connect_error){
		die("Connection failed: " . $connection->connect_error);
	}

	$connection = new mysqli(HOST, DB_USER, DB_PASSWORD, DB_NAME);

	$sqlInventory = "SELECT * FROM inventory";
	$queryInventory = $connection->query($sqlInventory);
?>
