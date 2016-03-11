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