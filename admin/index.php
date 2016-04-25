<?php 
	// require "includes/connect.php";
	// include "logic/login.logic.php";
	// require "logic/index.logic.php";
	


	// // Fuction to get the username of the current user by running checks to make sure the user's name exist and to see wether or not the cookie's username and token are equal to that of the database. Also checks to see if the expiry from the cookie is bigger than the expiry from the database. 

	// function getAccessUsername() {
	// 	global $db;
	// 	if(!isset($_COOKIE['user']) || !isset($_COOKIE['token'])){
	// 		header ("Location: login.php");
	// 	}

	// 	$now = time();

	// 	$query = "SELECT * FROM user";
	// 	$row = $db->query($query);
	// 	foreach($row AS $rows) {
	// 		if(($_COOKIE['user'] == $rows['name']) && ($_COOKIE['token'] == $rows['token']) && ($_COOKIE['expiry'] >= $rows['expiry'])) {

	// 			$username = $rows['name'];
	// 			var_dump($_COOKIE);
	// 			return $username;
	// 		}
	// 	}
	// }

	// setAccess();

	// function checkAccess() {
	// 	$username = getAccessUsername();

	// 	if($username == false) {
	// 		php::header("login.php");
	// 	} else {
	// 		//setAccess($username);
	// 	}
	// }

	// getAccessUsername();

	
 ?>