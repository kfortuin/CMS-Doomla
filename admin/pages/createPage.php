<?php 
	require "../../includes/connect.php";
	require "../logic/create.logic.php";
	require "../functions/getMenu.php"
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create page</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../../lib/ckeditor/ckeditor.js"></script>
	<script src="../../lib/ckeditor/config.js"></script>

</head>
<body>
	<nav role="navigation">
		<ul class="nav nav-pills">
			<?php echo getMenu(); ?>
		</ul>
	</nav>
	<div id="frame">
	  <div class="page-header">
	    <h1>Create Page 
	    <br>
	    <small>Welcome. On this website you can create your own page!</small></h1>
	  </div>

		<form class="form-horizontal" action="../logic/create.logic.php" method="post">
			<label class="control-label">Page title (max. 20): </label>
			<input type="text" name="page" maxlength="20" placeholder="Page title" autocomplete="off" required>
			<br>
			<label class="control-label">Page content (max. 255): </label>
			<textarea name="content" maxlength="255" placeholder="example text" autocomplete="off" required></textarea>
			<script>
            	CKEDITOR.replace( 'content' );
        	</script>
			<br>
			<label class="control-label">Menu option (max 20): </label>
			<input type="text" name="menuoption" maxlengt="20" placeholder="pref. same as Page name" autocomplete="off" required>
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
		<!-- Form to create new page -->



	</div>
</body>
</html>