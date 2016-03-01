<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>admin</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body >
	<div class="container">
	  <div class="jumbotron">
	    <h1>Admin</h1> 
	    <p>Admin control for all webpage. Add, edit and delete pages with ease on this Admin page.</p> 
	  </div>
	</div>
	<div id="frame">
		<table class="table">
				<th>id</th>
				<th>page</th>
				<th>content</th>
				<th>menuoption</th>
				<th>edit</th>
				<th>delete</th>

				<?php echo getAll(); ?>

		</table>
	</div>
</body>
</html>