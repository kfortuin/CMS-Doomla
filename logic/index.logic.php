<?php 
	$content = "No files found matching your description";
	if (@$_GET['page'] == null || (empty($_GET['page']) || is_numeric($_GET['page'])))
	{
		$_GET['page'] = "home";
	}
	$page = $_GET['page'];
	

	$query = "SELECT * FROM pagecontent WHERE page='$page'";

	$result = $db->query($query);
	$pagecontent = $result->fetch_assoc();	

	function getContent()
	{
		global $pagecontent;
		$content = $pagecontent['content'];
		echo $content;

		if(!$content)
		{
			echo "No content has been found";
		}
	}

	function getMenu()
	{
		global $db;
		$query = "SELECT * FROM pagecontent";

		$result = $db->query($query);
		$menuoption = $result->fetch_all(MYSQLI_ASSOC);
		
		foreach ($menuoption AS $menu)
		{
			$menu = $menu['page'];
			echo "<li><a href='index.php?page=$menu'>" . $menu . "</a></li> ";
		}
	}
