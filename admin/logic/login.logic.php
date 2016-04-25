<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

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

	$row = $db->query($query);
	foreach($row AS $rows){

		$db_password = $rows['password'];

		// Function to set cookies and insert a token and expiry in to the database for the current user

		
	

	// Check if entered password is equal to password in database. If so, run setAccess to send cookies to the database, else redirect to login page

		if($password == $db_password) {
			setAccess($username);
			header ("Location: ../home/admin.php");
		} else {
			header("Location: ../login.php");
		}
	} 

	

}

// Fuction to get the username of the current user by running checks to make sure the user's name exist and to see wether or not the cookie's username and token are equal to that of the database. Also checks to see if the expiry from the cookie is bigger than the expiry from the database.

function getAccessUsername() {
		global $db;
		if(!isset($_COOKIE['user']) || !isset($_COOKIE['token'])){
			header ("Location: login.php");
		}

		$now = time();

		$query = "SELECT * FROM user";
		$row = $db->query($query);
		foreach($row AS $rows) {
			if(($_COOKIE['user'] == $rows['name']) && ($_COOKIE['token'] == $rows['token']) && ($_COOKIE['expiry'] >= $rows['expiry'])) {

				$username = $rows['name'];
				return $username;
			}
		}
	}

function setAccess($username) {
	global $db;

	$token = rand(1, 99999);
	$expiry = time() + 600;
	setcookie("token", $token, $expiry, '/');

	setcookie("user", $username, $expiry, '/');

	setcookie("expiry", $expiry, $expiry, '/');

	$query = "UPDATE user SET token='$token', expiry='$expiry' WHERE name='$username' ";
	$result = $db->query($query);
}