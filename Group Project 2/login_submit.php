<!DOCTYPE html>
<html>
<head>
	<title>Login Successful</title>
	<link rel="stylesheet" type="text/css" href="css/jep.css">
</head>
<body>
	<?php
	if ("" == trim($_POST['username'])) {
		header("Location: mistake.html");
		exit();
	}
	if ("" == trim($_POST['password'])) {
		header("Location: mistake.html");
		exit();
	}
	session_start();
	?>

	<img src="photos/jep_logo.png" alt="jep logo" id="bannerarea">
	<p>Hi <?php echo $_POST["username"]; ?></p>
	<p>Your score last time was ...</p>
	<p>Want to try again?</p>
	<p><a class="button" href="startpage.php">Let's play!</a></p>

	<?php
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["points"] = 0; // reset last score

		$Leaderboard_entry = $_SESSION["username"].";".$_SESSION["points"].PHP_EOL;

		$filename = './text/leaderboard.txt';
		$file = fopen($filename, 'a');

		if ($file == false) { echo "Can't open file"; }

		fwrite($file, $single_nerd);
		fclose($file);
	?>

</body>
</html>