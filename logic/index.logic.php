<?php 
	$content = "No files found matching your description";
	@$page = $_GET['page'];
	

	$query = "SELECT * FROM pagecontent WHERE page='$page'";

	$result = $db->query($query);
	$pagecontent = $result->fetch_assoc();
	

	function getContent(){
		global $pagecontent;
		global $page;

		$content = $pagecontent['content'];
		if (!$content || (!is_numeric($content))){
			$page = "home";
			$content = $pagecontent['content'];
			echo $content;
		}else{
			echo $content;
		}
	}
