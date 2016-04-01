<?php 
	require "functions/getMenu.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $page; ?></title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="lib/js/jquery-2.2.1.js"></script>
	<script type="text/javascript">
		$(function() {
		$('.fadein img:gt(0)').hide();

		setInterval(function () {
		    $('.fadein :first-child').fadeOut()
		                             .next('img')
		                             .fadeIn()
		                             .end()
		                             .appendTo('.fadein');
		}, 6000); // 4 seconds
		});
	</script>
</head>
<body>
	<div class="fadein">
	    <img src="img/code1.jpg">
	    <img src="img/code2.jpg">
	    <img src="img/code3.jpg">
	    <img src="img/code4.jpg">
	</div>
	<nav role="navigation" id="nav">
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