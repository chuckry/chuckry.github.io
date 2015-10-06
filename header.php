<header>
	<nav id="navContainer">
		<a href="index.php" onmouseover="yellowBackground(0)" onmouseout="whiteBackground(0)">
			<div
				<?php 
					if ($currentPage == "index.php") {
						echo "id=\"current\"";
					}
				?>
				class="button"> <img src="house.png" alt="House"> HOME </div>
		</a>
		<a href="academics.php" onmouseover="yellowBackground(1)" onmouseout="whiteBackground(1)">
			<div 
				<?php 
					if ($currentPage == "academics.php") {
						echo "id=\"current\"";
					}
				?>
				class="button"> <img src="school.png" alt="School"> SCHOOL </div>
		</a>
		<a href="portfolio.php" onmouseover="yellowBackground(2)" onmouseout="whiteBackground(2)">
			<div 

				<?php 
					if ($currentPage == "portfolio.php") {
						echo "id=\"current\"";
					}
				?>
				class="button"> <img src="portfolio.png" alt="Briefcase"> PORTFOLIO </div>
		</a>
		<a href="aboutme.php" onmouseover="yellowBackground(3)" onmouseout="whiteBackground(3)">
			<div

				<?php 
					if ($currentPage == "aboutme.php") {
						echo "id=\"current\"";
					}
				?>
				class="button"> <img src="about.png" alt="Silhouette"> ABOUT </div>
		</a>
		<a href="form.php" onmouseover="yellowBackground(4)" onmouseout="whiteBackground(4)">
			<div
				<?php 
					if ($currentPage == "form.php" || $currentPage == "received.php") {
						echo "id=\"current\"";
					}
				?>
				class="button"> <img src="form.png" alt="Form"> CONTACT </div>
		</a>
	</nav>
</header>