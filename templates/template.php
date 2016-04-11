<?php 
	require "functions/getMenu.php";

	$query = "SELECT * FROM pagecontent";
	
	$result = $db->query($query);
	$themes = $result->fetch_all(MYSQLI_ASSOC);

	foreach ($themes AS $theme){
		$theme = $theme['theme'];
	}
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
		}, 6000); // 6 seconds
		});
	</script>
</head>
<body>
	<?php 
		if ($theme == " "){ ?>
			<div class='fadein'>
			    <img src='img/landscape1.jpg'>
			    <img src='img/landscape2.jpg'>
			    <img src='img/landscape3.jpg'>
			    <img src='img/landscape4.png'>
			</div>
		
		
		<?php 	require "template/template" . $theme . ".php";
		}; ?>
	
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