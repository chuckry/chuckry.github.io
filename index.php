<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title> Chuckry </title>
	<script type="text/javascript" src="imageChanging.js"></script>
</head>
<body onload="changeBanner('tallon.png');">
	<h1>Chuckry</h1>
	<?php include("header.php"); ?>

	<h2>MY MANY OCCUPATIONS</h2>

	<div id="wrapper">
		<div class="imageText" onclick="showText(0);">
			<img src="teletubby.jpg" alt="Teletubby">
			<h3 class="innerText">
				TELETUBBY FANATIC
			</h3>
			<hr class="innerText">
			<p class="innerText">
				While I am (unfortunately) not a teletubby in real life,
				I try to emulate the same bright, cheery personality.
				Maybe that's kind of a stretch, but at least I enjoyed
				it at the time.
			</p>
		</div>
		<div class="imageText" onclick="showText(1);">
			<img src="bandplaque.png" alt="Band Award">
			<h3 class="innerText">
				MUSIC ENTHUSIAST
			</h3>
			<hr class="innerText">
			<p class="innerText">
				In high school, I musically peaked as principal oboist 
				in my school symphonic band. We won several awards at
				invitationals and competitions across the country.
			</p>
		</div>
		<div class="imageText" onclick="showText(2);">
			<img src="cancun.png" alt="Band Award">
			<h3 class="innerText">
				RESORT TOURIST
			</h3>
			<hr class="innerText">
			<p class="innerText">
				I went to Cancun with my friends for senior year Spring
				Break, where we enjoyed the vibrant sun and beautiful
				ocean. The great weather and close friends made the trip
				unforgettable.
			</p>
		</div>
		<div class="imageText" onclick="showText(3);">
			<img src="sailor.jpg" alt="Sailor">
			<h3 class="innerText">
				DANCING SAILOR
			</h3>
			<hr class="innerText">
			<p class="innerText">
				I'm a dancer on Michigan Izzat, an all male Bollywood 
				Fusion dance team that competes across the country at 
				a collegiate level, having won 9 trophies over the 
				past 3 years.
			</p>
		</div>
	</div>
	<?php include("footer.php"); ?>
</body>
</html>