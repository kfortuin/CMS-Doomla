<?php 
	$content = "No files found matching your description";
	$page = $_GET['page'];

	$query = "SELECT * FROM pagecontent";

	$result = $db->query($query);
	$pagecontent = $result->fetch_all(MYSQLI_ASSOC);
	return ($pagecontent);

	if ($page == $pagecontent['page']){
		$content = $pagecontent['content'];
	}


	function getContent(){
		return ($content);
	}