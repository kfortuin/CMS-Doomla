<?php 
	require "../../includes/connect.php";
	
	if ($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$id = $db->real_escape_string($_GET['id']);
		$query = "SELECT * FROM pagecontent WHERE id=$id";

		$result = $db->query($query);
		$pagesAll = $result->fetch_all(MYSQLI_ASSOC);

		foreach($pagesAll AS $pageAll)
		{
			$id = $pageAll['id'];
			$pageOld = $pageAll['page'];
			$contentOld = $pageAll['content'];
			$menuoptionOld = $pageAll['menuoption'];
		}
	}
	elseif ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$id = $db->real_escape_string($_POST['id']);
		$pageNew = $db->escape_string($_POST['page']);
		$contentNew = $db->escape_string($_POST['content']);
		$menuoptionNew = $db->escape_string($_POST['menuoption']);

		$pageNew = strip_tags($_POST['page']);
		$contentNew = strip_tags($_POST['content']);
		$menuoptionNew = strip_tags($_POST['menuoption']);

		$pageNew = stripslashes($pageNew);
		$contentNew = stripslashes($contentNew);
		$menuoptionNew = stripslashes($menuoptionNew);

	

		if ($page == " ")
		{
			$page = $pageOld;
		}
		else
		{
			$page = $pageNew;
		}

		if ($content == " ")
		{
			$content = $contentOld;
		}
		else
		{
			$content = $contentNew;
		}

		if ($menuoption == " ")
		{
			$menuoption = $menuoptionOld;
		}
		else
		{
			$menuoption = $menuoptionNew;
		}

		$query = ("UPDATE pagecontent SET page='$page', content='$content', menuoption='$menuoption' WHERE id=$id");	

		$result = $db->query($query);

		header("Location: ../admin.php");
		exit();
	}
	