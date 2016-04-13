<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Log in</title>
	<link rel="stylesheet" href="css/default_theme.css">
</head>
<body>
	<h1>Log in</h1>
	
	<form class="login" action="logic/login.logic.php" action="post">
		<label>Username: </label>
		<input type="text" name="username"
		placeholder="Username">
		<br>
		<label>Password: </label>
		<input type="password" name="password" placeholder="">
		<br>
		<input type="submit" name="submit" value="Log in">


	</form>

</body>
</html>