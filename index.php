<?php 
	require "includes/connect.php";
	require "logic/index.logic.php";
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php 
			if ($_GET['page'] == ""){
				$_GET['page'] = "index";
			}
			echo $_GET['page']?></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<a href="">add page</a>
	<h1>Welcome to my CMS Doomla page!</h1>
	<?php foreach($page as $page): ; ?>
		<?= $page['content']; ?>
	<?php endforeach; ?>
</body>
</html>