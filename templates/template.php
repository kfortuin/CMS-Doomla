<?php 
	require "functions/getMenu.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page; ?></title>
	<link rel="stylesheet" href="css/landscape_theme.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<ul class="cb-slideshow">
		<li>
			<span>Image 01</span>
		</li>
		<li>
			<span>Image 02</span>
		</li>
		<li>
			<span>Image 03</span>
		</li>
		<li>
			<span>Image 04</span>
		</li>
	</ul>
	<nav role="navigation">
		<ul class="nav nav-pills">
			<?php echo getMenu(); ?>
		</ul>
	</nav>
	
	<section id="frame">
		<article style="padding-top: 15px;">
			<?php echo getContent($content); ?>
		</article>
	</section>
	
</body>
</html>