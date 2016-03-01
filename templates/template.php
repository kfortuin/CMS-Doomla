<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<nav role="navigation">
		<ul class="nav nav-pills">
			<?php echo getMenu(); ?>
		</ul>
	</nav>
	<div class="container">
	  <div class="jumbotron">
	    <h1>Content Management System</h1> 
	    <p>This is a selfmade CMS (Content Management System). Feel free to browse the different pages.</p> 
	  </div>
	</div>
	
	<section id="frame">
		<article>
			<?php echo getContent($content); ?>
		</article>
	</section>
</body>
</html>