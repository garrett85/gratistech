<?php
require_once('includes/init.php');

$connection = new mysqli(HOST, DB_USER, DB_PASSWORD, DB_NAME);

if($connection->connect_error){
	die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully\n\n";

$sql = "SELECT * FROM inventory";
$result = $connection->query($sql);

while($row = $result->fetch_assoc())
{
	echo $row['make']."\t".$row['model']."\t".$row['year']."\t".$row['price']."\n";
}

?>
