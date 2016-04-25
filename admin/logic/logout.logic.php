<?php 
	require "../includes/connect.php";
	$username = $_COOKIE['user'];

	$query = "UPDATE user SET token='0', expiry='0' WHERE name='$username'";
	$result = $db->query($query);

	setcookie("user", null, time() - 3600);
	setcookie("token", null, time() - 3600);
	setcookie("expiry", null, time() - 3600);

	header("Location: ../login.php");

	var_dump($_COOKIE);

?>