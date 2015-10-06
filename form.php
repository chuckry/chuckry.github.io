<!DOCTYPE html>
<?php $currentPage = basename(__FILE__); ?>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Contact</title>
	<script type="text/javascript" src="imageChanging.js"></script>
</head>
<body onload="changeBanner('torvus.png');">
	<h1>Contact</h1>
	<?php include("header.php"); ?>
	<form action="received.php" method="POST" onsubmit="return checkEmail();">
		<fieldset>
			<label>Name:<input type="text" id="name" name="name" placeholder="Mike Ehrmantraut" required/></label>
			<label>Email:<input type="email" id="firstEmail" name="firstEmail" placeholder="nomorehalfmeasures@yahoo.com" required/></label>
			<label>Confirm Email:<input type="email" id="confirmEmail" name="confirmEmail" placeholder="nomorehalfmeasures@yahoo.com" required/></label>
			<label>
				Contact Me!:
				<br>
				<textarea name="textbox" placeholder="Send me a message!"></textarea>
			</label>
			<input type="submit" value="SEND"/>

		</fieldset>	
	</form>
	<?php include("footer.php"); ?>
</body>
</html>