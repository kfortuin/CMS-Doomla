<?php 
	require "../../includes/connect.php";
	require "../logic/edit.logic.php";
	require "../functions/getMenu.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit page</title>
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
	    <h1>Edit Page	
	    <br>
	    <small>Welcome. On this website you can edit a page!</small></h1>  
	  </div>

	<form class="form-horizontal" action="../logic/edit.logic.php" method="post">
			<label class="control-label">Page title (max. 20): </label>
			<input type="text" name="page" maxlength="20" value="<?=$pageOld;?>" autocomplete="off" required>
			<br>
			<label class="control-label">Page content: </label>
			<textarea name="content" autocomplete="off" required value=<?=$contentOld;?>></textarea>
			<script>
       	    	CKEDITOR.replace( 'content' );
        	</script>
			<br>
			<label class="control-label">Menu option (max 20): </label>
			<input type="text" name="menuoption" maxlengt="20" value="<?=$menuoptionOld;?>" autocomplete="off" required>
			<br>
			<input type="submit" name="submit" value="Submit">
			<input type="hidden" name="id" value="<?=$pageAll['id'];?>">
		</form>
	</div>
</body>
</html>