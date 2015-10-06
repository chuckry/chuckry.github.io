<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Academics </title>
	<script type="text/javascript" src="imageChanging.js"></script>
</head>
<body onload="changeBanner('chozo.png');">
	<h1>Academics</h1>
	<?php include("header.php"); ?>
	<h2>Courses Taken:</h2>
	<div class="list" onclick="changeList(0);" onmouseover="yellowBorder(0);" onmouseout="whiteBorder(0);">
		<h3>Data Structures and Algorithms</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p> 
			This was the most rigorous course that I had taken at the University, yet it 
			was also the most rewarding. While it was also the most difficult course I 
			had ever taken, I learned an exorbitant amount about basic algorithmic approaches 
			and important data structures necessary for solving real-world problems. Some 
			topics we were taught include sorting algorithms, priority queues, hash tables, 
			binary search and AVL trees, dynamic programming approaches, and branch and 
			bound algorithms.

			My favorite topic covered in the course was by far the dynamic programming topic,
			as the method itself provides, in my opinion, the most unique kind of solution to
			certain problems.
		</p>
	</div>

	<div class="list" onclick="changeList(1);" onmouseover="yellowBorder(1);" onmouseout="whiteBorder(1);">
		<h3>Computer Organization</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p>
			I was not a huge fan of this course, as my focus of interest lies more in 
			algorithms and development rather than lower-level, hardware based knowledge.
			Nevertheless, this course taught me a great deal about how a computer interprets
			code and organizes itself into efficient databases.
		</p>
	</div>

	<div class="list" onclick="changeList(2);" onmouseover="yellowBorder(2);" onmouseout="whiteBorder(2);">
		<h3>Agile Web Development</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p>
			Currently taking this class, and I have already learned a great deal from it. While
			I am accustomed to the sort of coding associated with algorithms and logic problems,
			this is the first coding course I've taken in which focus is more on accessibility,
			intuitiveness, and presentation, all of which are new to me.
		</p>
	</div>

	<h2>Courses Planning to Take:</h2>
	<div class="list" onclick="changeList(3);" onmouseover="yellowBorder(3);" onmouseout="whiteBorder(3);">
		<h3>Operating Systems</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p>
			I am extremely excited to take this course. I'm not sure exactly what to expect,
			but I have heard that it is one of the best courses taught at the University of
			Michigan. I'm interested to learn the fundamentals of how any computing system
			functions. Regardless of its high difficulty, this course will benefit me greatly 
			in the long run.
		</p>
	</div>

	<div class="list" onclick="changeList(4);" onmouseover="yellowBorder(4);" onmouseout="whiteBorder(4);">
		<h3>Advanced Object Oriented Programming</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p>
			Although there is a legitimate website <a id="eecs" href="http://shoulditake381.com/">here</a>
			for the pros and cons of taking this gargantuan of a course, I would love to 
			become a better programmer and thus would love to take this class in the near future.
		</p>
	</div>

	<div class="list" onclick="changeList(5);" onmouseover="yellowBorder(5);" onmouseout="whiteBorder(5);">
		<h3>Web Databases</h3>
		<hr class="divider">
		<hr class="fixedLine">
		<p> 
			As opposed to mobile development, which I would prefer to study on my own time, web
			databases and development is such a huge span of knowledge that I feel I cannot
			afford to miss out on during my time at the university. I feel that to be a successful
			programmer, one must know how to manipulate websites and manage data in an efficient
			and presentable way.
		</p>
	</div>

	<?php include("footer.php"); ?>
</body>
</html>