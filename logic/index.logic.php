<?php 
	$guide = (isset($_GET['page']));

	if (isset($_GET['page']) == "home") {

	}elseif (isset($_GET['page']) == "guide"){

	}else{

	}

	$query = "SELECT pagecontent.id as id, pagecontent.page as pageName, pagecontent.content as content FROM pagecontent WHERE id=1";
	$result = $db->query($query);

	$page = $result->fetch_all(MYSQLI_ASSOC);


