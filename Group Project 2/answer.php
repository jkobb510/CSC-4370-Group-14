<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Score</title>
</head>

<body>

   <div class="container">

      <h1>Your Result</h1>

      <?php

      $answer1 = $_POST['question-1-answers'];

      $totalscore = 0;

      if ($answer1 == "A") {
         $totalscore++;
      }

      if ($answer1 == "B") {
         $totalscore--;
      }

      if ($answer1 == "C") {
         $totalscore--;
      }

      if ($answer1 == "D") {
         $totalscore--;
      }

      echo "<div class='score'> Score: $totalscore</div>";

      echo "<div class='button'> <a href='homepage.html'> Return home </a> </div>";

      ?>

   </div>

</body>

</html>