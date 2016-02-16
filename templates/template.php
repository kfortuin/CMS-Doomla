<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page; ?></title>
	<link rel="stylesheet" href="templates/template.php">
</head>
<body>
	<section>
		<article>
			<?php echo getContent($content); ?>
		</article>
	</section>
</body>
</html>