<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Portfolio </title>
	<script type="text/javascript" src="imageChanging.js"></script>
</head>
<body onload="changeBanner('phazon.png');">
	<h1>Portfolio</h1>
	<?php include("header.php"); ?>
	<h2>My Accomplishments</h2>
	<div class="list" onclick="changeList(0);" onmouseover="yellowBorder(0);" onmouseout="whiteBorder(0);">
		<h3>Gaming for the Greater Good</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p> 
			I took a class second semester freshman year called Gaming for the
			Greater Good, in which we were assigned groups and were then required
			to code a computer game designed to help children with Autism Spectrum
			Disorder. Our project, titled Cookie Quest, was coded in Python using 
			the Pygame module. In Cookie Quest, two players had to work together
			to collect all cookies on the screen while avoiding "bad guys" patrolling
			the ground and the air. The catch was that both players had to jump
			at the same time and could not jump independently, forcing the two
			to work together to avoid obstacles.
		</p>
	</div>

	<div class="list" onclick="changeList(1);" onmouseover="yellowBorder(1);" onmouseout="whiteBorder(1);"> 
		<h3>Kappa Theta Pi</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p> 
			My first semester sophomore year, I rushed a professional technology 
			fraternity called Kappa Theta Pi (KTP). Now, as an active member, I am a
			part of KTP's Development Team, in which members work on both mobile and 
			web applications promoting KTP. Over the year that I've spent as a part of
			KTP, I've grown to love the community it provides, with all of its
			technological quirkiness, and I am very excited to see what the next two
			years bring.
		</p>
	</div>

	<?php include("footer.php"); ?>
</body>
</html>