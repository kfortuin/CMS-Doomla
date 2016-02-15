<?php 
	$page = $_GET['page'];
	

	$query = "SELECT * FROM pagecontent";

	$result = $db->query($query);
	$pagecontent = $result->fetch_all(MYSQLI_ASSOC);
	return ($pagecontent);

	if ($page == $pagecontent['page']){
		$content = $pagecontent['content'];
	}else{
		$content = "No files found matching your description";
	}

	function getContent($content){
		return ($content);
	}
