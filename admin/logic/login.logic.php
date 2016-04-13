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

	$query = "SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1";
	$result = mysqli_query($db, $query);

	$row = mysqli_fetch_array($result);
	$id = $row['id'];
	$db_password = $password;

	if($password == $db_password)
	{
		function setAccess($username)
		{
			$token = rand(1, 99999);
			$expiry = time() + 600;

			
		}
	}

}


?>