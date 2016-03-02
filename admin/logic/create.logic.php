<?php 
	require "../../includes/connect.php";

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$page = $_POST['page'];
		$content = $_POST['content'];
		$menuoption = $_POST['menuoption'];

		// $page = strip_tags($_POST['page']);
		// $content = strip_tags($_POST['content']);
		// $menuoption = strip_tags($_POST['menuoption']);

		// $page = stripslashes($page);
		// $content = stripslashes($content);
		// $menuoption = stripslashes($menuoption);

		$stmt= $db->prepare("INSERT INTO pagecontent(page, content, menuoption) VALUES (?, ?, ?)");
		$stmt->bind_param("sss", $page, $content, $menuoption);

		$stmt->execute();
		$stmt->close();
		header("Location: 
			../admin.php");
		exit();
	}
	
	