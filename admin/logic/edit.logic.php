<?php 
	ob_start();
	include "../../includes/connect.php";
	
	if ($_SERVER['REQUEST_METHOD'] == "GET")
	{
		$id = $db->real_escape_string($_GET['id']);
		$query = "SELECT * FROM pagecontent WHERE id=$id";

		$result = $db->query($query);
		$pagesAll = $result->fetch_all(MYSQLI_ASSOC);

		// Triggers on entering the page. Put all the data gathered from the database into variables, which can be used to run checks on.

		foreach($pagesAll AS $pageAll)
		{
			$id = $pageAll['id'];
			$pageOld = $pageAll['page'];
			$contentOld = $pageAll['content'];
			$menuorderOld = $pageAll['menuorder'];
			$menuoptionOld = $pageAll['menuoption'];
			$themeOld = $pageAll['theme'];
		}
	}

	// After changing certain data about the page, this replaces the `old` data with the new data, but if nothing changed, the data will keep its old value
	elseif ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$id = $db->real_escape_string($_POST['id']);
		$pageNew = $db->escape_string($_POST['page']);
		$contentNew = $db->escape_string($_POST['content']);
		$menuorderNew = $db->escape_string($_POST['menuorder']);
		$menuoptionNew = $db->escape_string($_POST['menuoption']);
		$themeNew = $db->escape_string($_POST['theme']);

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

		if ($theme == " ")
		{
			$theme = $themeOld;
		}
		else
		{
			$theme = $themeNew;
		}

		$query = ("UPDATE pagecontent SET page='$page', content='$content', menuorder='$menuorder', menuoption='$menuoption', theme='$theme' WHERE id=$id");	

		$result = $db->query($query);

		header("Location: ../home/admin.php");
		exit();
	}