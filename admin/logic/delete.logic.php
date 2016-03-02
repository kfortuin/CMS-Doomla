<?php 
	require "../../includes/connect.php";

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
	elseif ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if (isset($_POST['confirm']))
		{
			$id = $db->escape_string($_POST["id"]);

			$query = "DELETE FROM pagecontent WHERE id=$id";
			$result = $db->query($query);
			header ("Location: ../admin.php");
		}
		elseif (isset($_POST['cancel']))
		{
			header ("Location: ../admin.php");
		}
	}