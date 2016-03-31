<?php 
	require "../functions/getMenu.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>admin</title>
	<link rel="stylesheet" href="../css/default_theme.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body >
	<nav role="navigation">
		<ul class="nav nav-pills">
			<?php echo getMenu(); ?>
		</ul>
	</nav>
	<div class="container">
	  <div class="jumbotron">
	    <h1>Admin</h1> 
	    <p>Admin control for all webpage. Add, edit and delete pages with ease on this Admin page.</p> 
	  </div>
	</div>
	<div id="frame">
	<a class="createLink" href="../pages/createPage.php"><button type="button" class="btn btn-default navbar-btn">Create page</button></a>
		<table class="table">
				<th>id</th>
				<th>page</th>
				<th>content</th>
				<th>menuorder</th>
				<th>menuoption</th>
				<th>edit</th>
				<th>delete</th>

				<?php echo getAll(); ?>

		</table>
	</div>
</body>
</html>