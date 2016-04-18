<?php 
	require "logic/login.logic.php";

	if ($token >= 0){
		header ("Location: home/admin.php");
	}

	header ("Location: login.php");
 ?>