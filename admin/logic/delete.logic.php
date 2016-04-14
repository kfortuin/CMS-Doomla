<?php 
	require "../../includes/connect.php";

	// Triggers on loading the page

	if ($_SERVER['REQUEST_METHOD'] == "GET")
	{
		if (isset($_GET['id']))
		{
			$id = $db->escape_string($_GET["id"]);

			$query = "SELECT * FROM pagecontent WHERE id=$id";

			$result = $db->query($query);
			$pageContent = $result->fetch_all(MYSQLI_ASSOC);
		}
	} 

	// Performs a `delete` if the user confirms. If the user cancels, nothing changes and user is redirected to the main admin page

	elseif ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if (isset($_POST['confirm']))
		{
			$id = $db->escape_string($_POST["id"]);

			$query = "DELETE FROM pagecontent WHERE id=$id";
			$result = $db->query($query);
			header ("Location: ../home/admin.php");
		}
		elseif (isset($_POST['cancel']))
		{
			header ("Location: ../home/admin.php");
		}
	}