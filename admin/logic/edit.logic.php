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
			$menuorderOld = $pageAll['menuorder'];
			$menuoptionOld = $pageAll['menuoption'];
		}
	}
	elseif ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$id = $db->real_escape_string($_POST['id']);
		$pageNew = $db->escape_string($_POST['page']);
		$contentNew = $db->escape_string($_POST['content']);
		$menuorderNew = $db->escape_string($_POST['menuorder']);
		$menuoptionNew = $db->escape_string($_POST['menuoption']);

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

		if ($menuorder == " ")
		{
			$menuorder = $menuorderOld;
		}
		else
		{
			$menuorder = $menuorderNew;
		}

		if ($menuoption == " ")
		{
			$menuoption = $menuoptionOld;
		}
		else
		{
			$menuoption = $menuoptionNew;
		}

		$query = ("UPDATE pagecontent SET page='$page', content='$content', menuorder='$menuorder', menuoption='$menuoption' WHERE id=$id");	

		$result = $db->query($query);

		header("Location: ../home/admin.php");
		exit();
	}
	