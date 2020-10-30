<!DOCTYPE html>
<html>
<head>
	<title>Signup Successful</title>
	<link rel="stylesheet" type="text/css" href="css/jep.css">
</head>
<body>
	<?php
	if ("" == trim($_POST['name'])) {
		header("Location: mistake.html");
		exit();
	}
	if ("" == trim($_POST['username'])) {
		header("Location: mistake.html");
		exit();
	}
	if ("" == trim($_POST['password'])) {
		header("Location: mistake.html");
		exit();
	}
	?>

	<img src="photos/jep_logo.png" alt="jep logo">
	<p>Hi, <?php echo $_POST["username"]; ?>. Welcome!</p>
	<p>Let's get started</p>
	<p><a class="button" href="startpage.php">Let's play!</a></p>

</body>
</html>