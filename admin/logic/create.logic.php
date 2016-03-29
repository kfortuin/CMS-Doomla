<?php 
	require "../../includes/connect.php";

	if ($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$page = $_POST['page'];
		$content = $_POST['content'];
		$menuoption = $_POST['menuoption'];
		$menuorder = $_POST['menuorder'];
		$theme = $_POST['theme'];

		$query="SELECT menuorder FROM pagecontent";
		$result=$db->query($query);
		$order = $result->fetch_all(MYSQLI_ASSOC);

		foreach ($order AS $order){
				$order = $order['menuorder'];
			}

		if ($menuorder == NULL ) {
			$menuorder = $order + 1;
		}


		// $page = strip_tags($_POST['page']);
		// $content = strip_tags($_POST['content']);
		// $menuoption = strip_tags($_POST['menuoption']);

		// $page = stripslashes($page);
		// $content = stripslashes($content);
		// $menuoption = stripslashes($menuoption);

		$stmt= $db->prepare("INSERT INTO pagecontent(page, content, menuoption, menuorder, theme) VALUES (?, ?, ?, ?, ?)");
		$stmt->bind_param("sssis", $page, $content, $menuoption, $menuorder, $theme);

		$stmt->execute();
		$stmt->close();
		header("Location: 
			../home/admin.php");
		exit();
	}
	
	