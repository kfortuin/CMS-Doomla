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
	    <h1>Edit Page	
	    <br>
	    <small>Welcome. On this website you can edit a page!</small></h1>  
	  </div>

	<form class="form-horizontal" action="../logic/edit.logic.php" method="post">
			<label class="control-label">Page title (max. 20): </label>
			<input type="text" name="page" maxlength="20" value="<?=$pageOld;?>" autocomplete="off" required>
			<br>
			<label class="control-label">Page content: </label>
			<textarea required name="content" autocomplete="off" rows="10" cols="88"><?=$contentOld;?></textarea>
			<br>
			<label class="control-label">Menu order: </label>
			<input type="number" name="menuorder" value="<?=$menuorderOld;?>">
			<br>
			<label class="control-label">Menu option (max 20): </label>
			<input type="text" name="menuoption" maxlength="20" value="<?=$menuoptionOld;?>" autocomplete="off" required>
			<br>
			<label class="control-label">Theme:	</label>
			<br>
			<input type="radio" selected="true" name="theme" value="templateLandscape.php">Landscape
			<br>
			<input type="radio" name="theme" value="templateCode.php">Code
			<br>
			<input type="submit" name="submit" value="Submit">
			<input type="hidden" name="id" value="<?=$pageAll['id'];?>">
		</form>
	</div>
</body>
</html>