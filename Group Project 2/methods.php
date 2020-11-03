<!DOCTYPE html>
<html>
<head>
	<title>methods</title>
</head>
<body>
	<?php
		function login_check($username, $password) {
			$filelocation = "text/leaderboard.txt";
			$file = fopen($filelocation, "r");
			$previous_points = "";
			$name = "";
			$uname = "";
			$upass = "";

			if ($file = fopen($filelocation, "r")) {
				while (!feof($file)) {
					 $line = fgets($file);
					 $line_array = explode(";", $line);
					 $name = $line_array[0];
					 $uname = $line_array[1];
					 $upass = $line_array[2];
					 $previous_points = $line_array[3];
					 if ((strcasecmp($uname, $username) == 0) && (strcasecmp($upass, $password)) == 0) {
					 	return array($name, $uname, $upass, $previous_points);
					 }
				}
			}
			echo "Incorrect credentials<br>";
			exit();
		}

		function signup_check($username, $password){
			$filelocation = "text/leaderboard.txt";
			$file = fopen($filelocation, "r");

			if ($file = fopen($filelocation, "r")) {
				while (!feof($file)) {
					 $line = fgets($file);
					 $line_array = explode(";", $line);
					 $uname = $line_array[1];
					 $upass = $line_array[2];
					 if ((strcasecmp($uname, $username) == 0) && (strcasecmp($upass, $password)) == 0) {
					 	echo "Account already exists<br>";
					 	exit();
					 }
				}
			}
			return $username;
		}

		function logout_submit($name, $username, $password, $score){
			$leaderboard_in = $name.";".$username.";".$password.";".$score;

			$filelocation = "text/leaderboard.txt";
			$file = fopen($filelocation, "r");
			$line_rm = "";
			$repeated_user = false;

			if ($file = fopen($filelocation, "r")) {
				while (!feof($file)) {
					 $line = fgets($file);
					 $line_array = explode(";", $line);
					 $uname = $line_array[1];
					 $upass = $line_array[2];
					 if ((strcasecmp($uname, $username) == 0) && (strcasecmp($upass, $password)) == 0) {
					 	$repeated_user = true;
					 	$line_rm = trim($line);
					 	echo $line_rm."<br>";
					 }
				}
			}

			$content = file_get_contents($filelocation);
			if ($repeated_user) {
				$content = str_replace($line_rm, $leaderboard_in, $content);
				file_put_contents($filelocation, $content);
			} else { 
				file_put_contents($filelocation, PHP_EOL.$leaderboard_in, FILE_APPEND); 
			}
			
		}

		$hi = login_check("katie","12345");
		print_r($hi);
		echo "<br>";

		$hi2 = signup_check("YikesMate","13245");
		echo $hi2."<br>";

		logout_submit("Katie", "LovelyStyle", "32465", "50");
		logout_submit("Jackson", "JackoLantern", "34232", "25");
	  ?>

</body>
</html>