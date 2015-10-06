<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> About Chuckry </title>
	<script type="text/javascript" src="imageChanging.js"></script>
</head>
<body onload="changeBanner('fortress.png');">
	<h1>About Me</h1>
	<?php include("header.php"); ?>
	<h2>A little bit about me...</h2>
	<div class="list" onclick="changeList(0);" onmouseover="yellowBorder(0);" onmouseout="whiteBorder(0);">
		<h3>Computer Science Engineer</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p> 
			I didn't know what I wanted to study until my first semester
			at the University, when I took my first introductory programming
			class. From then on, I knew that that's what I wanted to do for
			a living: seeing a need and then solving it. I intend to learn
			more about mobile and web based applications and create applications
			specifically to make life more convenient.
		</p>
	</div>

	<div class="list" onclick="changeList(1);" onmouseover="yellowBorder(1);" onmouseout="whiteBorder(1);">
		<h3>Oboist</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p>
			When I was in high school, I was heavily involved in my school
			band and orchestra program. I was the first chair oboist for two
			years, I performed in the Pit Orchestra for our school's rendition
			of "Seussical the Musical," and I performed a solo concerto piece
			at the end of my senior year, in which I played a solo and the
			school orchestra played an accompanying part.
		</p>
	</div>

	<div class="list" onclick="changeList(2);" onmouseover="yellowBorder(2);" onmouseout="whiteBorder(2);">
		<h3>Bollywood Fusion Dancer</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p>
			I've been on an all-male Bollywood Fusion dance team called Michigan
			Izzat for the past two years. We compete nationally against other
			collegiate-level dance teams, and we have placed at every single
			competition we've been to except for one. Although it's extremely
			time-consuming, it is one of the most empowering experiences to
			dance on stage before an audience of at least a hundred cheering
			people.
		</p>
	</div>

	<div class="list" onclick="changeList(3);" onmouseover="yellowBorder(3);" onmouseout="whiteBorder(3);">
		<h3>Wannabe Super Smash Bros. Melee Competitor</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p> 
			I've always been a big fan of video games, and my favorite game of
			all time is Super Smash Bros. Melee. It's been out for over 10 years
			now, but I still never get bored of playing because the game requires
			precise timing, knowledge of characters' moves, and the ability to 
			think on your feet.
		</p>
	</div>

	<div class="list" onclick="changeList(4);" onmouseover="yellowBorder(4);" onmouseout="whiteBorder(4);">
		<h3>Aspiring Montage Maker</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p>
			As of late, I've grown to appreciate video montages, especially those
			made in tribute of some of my favorite TV shows. With some extra time
			on my hands, I decided to get my feet wet by making one of my own! My
			YouTube channel, which contains my work, can be found below. I hope to
			contain making montages and tributes as a hobby, so my channel will be
			updated frequently.
		</p>
	</div>

	<?php include("footer.php"); ?>
</body>
</html>







