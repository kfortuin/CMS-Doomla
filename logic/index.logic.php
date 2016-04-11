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

	$_GET['id'] = $pagecontent['id'];

	$id = $db->escape_string($_GET["id"]);

	$query = "SELECT theme FROM pagecontent WHERE id=$id";
	
	$result = $db->query($query);
	$templates = $result->fetch_all(MYSQLI_ASSOC);
	foreach ($templates AS $template){
		if (!isset($template)){
			$template = "templateLandscape.php";
		}
		else
		{
			$template = $template['theme'];
		};
		
		
	}

		

	