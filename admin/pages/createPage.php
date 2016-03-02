<?php 
	require "../logic/create.logic.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Create page</title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
	<div id="frame">
	  <div class="page-header">
	    <h1>Create Page 
	    <br>
	    <small>Welcome. On this website you can create your own page!</small></h1>
	  </div>

		<form class="form-horizontal" action="../logic/create.logic.php" method="post">
			<label class="control-label">Page name (max. 20): </label>
			<input type="text" name="page" maxlength="20" placeholder="Page name" autocomplete="off">
			<br>
			<label class="control-label">Page content (max. 255): </label>
			<textarea name="content" maxlength="255" placeholder="example text" autocomplete="off"></textarea>
			<br>
			<label class="control-label">Menu option (max 20): </label>
			<input type="text" name="menuoption" maxlengt="20" placeholder="pref. same as Page name" autocomplete="off">
			<br>
			<input type="submit" name="submit" value="Submit">
		</form>
		<!-- Form to create new page -->



	</div>
</body>
</html>