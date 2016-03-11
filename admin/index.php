<?php 
	if (!isset($_SESSION['id']))
	{
		header ("Location: log/login.php");
	} else {
		header ("Location: home/admin.php");
	}
 ?>