<!DOCTYPE html>
<html>
<head>
	<title>Winner Circle</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php session_start(); ?>
	<img src="photos/jep_logo.png" alt="jep logo" id="bannerarea">
	<p>You've Won, <?php echo $_SESSION["username"]; ?>!</p>
	<?php 
		echo "Total Score: ".$_SESSION["points"]."<br>";
	?>

	<p><a class="button" href="logout.php">Logout</a></p>
</body>
</html>