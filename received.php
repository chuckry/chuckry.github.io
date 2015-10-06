<!DOCTYPE html>
<?php $currentPage = basename(__FILE__) ?>
<html lang="en">
<head>
	<title>Email Sent!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="imageChanging.js"></script>
</head>
<body>
	<?php
		$filename = "data.csv";

	    $isItExisting = (file_exists($filename));

	 	$handle = fopen($filename, 'a');
	 	$msg = "Thanks ". $_POST['name'] . " for submitting!\n";
		$stringToAdd="";																//File information

		if (!$isItExisting){
			foreach($_POST as $name => $value) {
				$stringToAdd.="$name,";													//Make the column headings, comma after name for csv file 
			}							
			$stringToAdd.="\n";															//Make sure file goes to next line
			fwrite($handle, $stringToAdd);												//Write the 
		}
		echo "<h1>Chuckry</h1>";
		include("header.php");
		echo "<h3 class=\"sent\">Thank you!</h3>";
		echo "<h3 class=\"sent\">You will receive an email shortly.</h3>";
		echo "<div class='submit_page'>";
			$stringToAdd="";															//Reset the file info to blank
			foreach($_POST as $name => $value){
				print "$name : $value <br/>";											//This is going to the screen, double quotes expand variable if you used single here it would print $name
				$msg .="$name : $value\n";												//This is going to the email
				$stringToAdd.="$value,";												//This is going to the file, you just want the values in the cells, and comma again for cvs
			}
			$stringToAdd.="\n";

		fwrite($handle, $stringToAdd);
		echo"</div>";	
		fclose($handle); 																//now close the file


		$to = $_POST["firstEmail"];		
		$headers = "From: ". $_POST["name"] ."<".$_POST["firstEmail"]. ">\r\n";
		
		mail($to, 'Form Data', $msg,$headers);											//mail is the function, you need a variable of where its going to afterwards (or hard code)
	?>
		<img id="samus" src="samus.jpg" alt="Thumbs Up">

	<?php include("footer.php"); ?>


</body>
</html>