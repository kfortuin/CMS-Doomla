<?php 
	require "../../includes/connect.php";
	require "../logic/delete.logic.php";
	require "../functions/getMenu.php";
	require "../function/getAccessUsername.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Delete page</title>
	<link rel="stylesheet" href="../css/default_theme.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<nav role="navigation">
		<ul class="nav nav-pills">
			<?php echo getMenu(); ?>
		</ul>
	</nav>
	<div id="frame">
		<div class="page-header">
	    <h1>Delete Page 
	    <br>
	    <small>Welcome. On this website you can delete a page!</small></h1>
	  </div>
	  <div class="alert alert-danger" role="alert">Are you sure you want to delete:</div></p>
	  <p>
    	<?php 
    	foreach ($pageContent AS $pageContent ){
    	echo "<br> ID: " . $pageContent['id'] . "<br> Page: " . $pageContent['page'] . "<br> Content: " . $pageContent['content'] . "<br> Menu option: " . $pageContent['menuoption']; 
    	}
    	?>
	  </p>
	  <form action="../logic/delete.logic.php" method="post">
	  	<input type="hidden" name="id" value="<?=$pageContent['id'];?>">
		  <input type="submit" name="confirm" value="Yes, I am sure">
		  <input type="submit" name="cancel" value="No">
	  </form>
	</div>
	  
</body>
</html>