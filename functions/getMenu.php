<?php
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
		$query = "SELECT * FROM pagecontent WHERE menuorder < 2";

		$result = $db->query($query);
		$menuoption = $result->fetch_all(MYSQLI_ASSOC);
		
		$i = 0;
		foreach ($menuoption AS $menu)
		{
			$menu = $menu['page'];
			echo "<li role='presentation'><a href='index.php?page=$menu'>" . $menu . "</a></li> ";
		}
		echo "<a href='admin/index.php'><button type='button' style='float: right; margin-right: 10px;
		' class='btn btn-default navbar-btn'>Sign in</button></a>";

	}
