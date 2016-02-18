<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page; ?></title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<section id="frame">
		<article>
			<?php echo getContent($content); ?>
		</article>
	</section>
</body>
</html>