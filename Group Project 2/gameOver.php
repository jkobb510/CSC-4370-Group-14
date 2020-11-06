<!DOCTYPE html>
<html>
<head>
	<title>Logout Successful</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?php session_start(); ?>
	<img src="photos/jep_logo.png" alt="jep logo" id="bannerarea">
	<p>You've Won, <?php echo $_SESSION["username"]; ?>!</p>
	<?php 
		include "methods.php";
	?>

	<p><a class="button" href="Logout.php">Logout</a></p>
</body>
</html>