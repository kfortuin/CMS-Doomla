<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){

	

	require "../includes/connect.php";

	// Initialize input

	$username = $_POST['username'];
	$password = $_POST['password'];

	// Strip input of any tags or slashes

	$username = strip_tags($username);
	$password = strip_tags($password);

	$username = stripslashes($username);
	$password = stripslashes($password);

	$username = mysqli_real_escape_string($db, $username);
	$password = mysqli_real_escape_string($db, $password);

	// Retrieve username and password combination from database

	$query = "SELECT * FROM user WHERE name='$username' AND password='$password' LIMIT 1";
	// $result = mysqli_query($db, $query);

	$row = $db->query($query);
	foreach($row AS $rows){

		$db_password = $rows['password'];

		function setAccess($username)
		{
		global $username, $db, $password;

			$token = rand(1, 99999);
			$expiry = time() + 600;
			setcookie("token", $token, $expiry);

			setcookie("user", $username, $expiry);

			$query = "UPDATE user SET token='$token', expiry='$expiry' WHERE name='$username' AND password='$password'";
			$result = $db->query($query);
		}
	

	// Check if entered password is equal to password in database. If so, run setAccess to send cookies to the database, else redirect to login page

		if($password == $db_password)
		{
			echo "HOI";
			setAccess($username);
			header ("Location: ../home/admin.php");
		}else{
			header("Location: ../index.php");
		}
	}


}
