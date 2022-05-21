<?php
require_once('includes/init.php');

$sqlUsers = "SELECT * FROM users WHERE email={$_POST['username']}";
$queryUsers = $connection->query($sqlUsers);
$fetchUser = $queryUsers->fetch_assoc();


if($fetchUser->num_rows > 0)
{
	echo 1;
}

$user = $_SESSION['user'] = $_POST['username'];
$username = $_POST['username'];
$password = $_POST['password'];


// echo $_POST['username'];
// echo $_SESSION['user'];
?>
