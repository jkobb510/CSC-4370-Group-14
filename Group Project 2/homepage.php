<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Jeopardy</title>
</head>

<body>
   <?php session_start(); ?>

   <h1><img src="photos/jep_logo.png" alt="jep logo" style="width: 250px"></h1>
   <div class="container">


      <div class="box">Technology</div>
      <div class="box">History</div>
      <div class="box">Pop Culture</div>
      <div class="box">Science</div>
      <div class="box">Misc.</div>
      <div class="box"> <a href="question.php"> $100</a></div>
      <div class="box"><a href="question6.php">$100 </a></div>
      <div class="box"><a href="question11.php">$100 </a></div>
      <div class="box"><a href="cell.php">$100 </a></div>
      <div class="box"><a href="misc1.php">$100 </a></div>
      <div class="box"><a href="question2.php"> $200</a></div>
      <div class="box"><a href="question7.php">$200</a></div>
      <div class="box"><a href="dicaprio_Q.php">$200</a></div>
      <div class="box"><a href="waves.php">$200</a></div>
      <div class="box"><a href="misc2.php">$200</a></div>
      <div class="box"><a href="question3.php">$300</a></div>
      <div class="box"><a href="question8.php">$300</a></div>
      <div class="box"><a href="foreign.php">$300</a></div>
      <div class="box"><a href="bond.php">$300</a></div>
      <div class="box"><a href="misc3.php">$300</a></div>
      <div class="box"><a href="question4.php">$400</a></div>
      <div class="box"><a href="question9.php">$400</a></div>
      <div class="box"><a href="marriagestory_q.php">$400</a></div>
      <div class="box"><a href="medicine.php">$400</a></div>
      <div class="box"><a href="misc4.php">$400</a></div>
      <div class="box"><a href="question5.php">$500</a></div>
      <div class="box"><a href="question10.php">$500</a></div>
      <div class="box"><a href="musk_q.php">$500</a></div>
      <div class="box"><a href="keto.php">$500</a></div>
      <div class="box"><a href="misc5.php">$500</a></div>

   </div>
   <div>
      <p style="margin-left: auto; margin-right: auto;"><a href="logout.php" class="button">Logout</a></p>
   </div>

   <?php 
   echo $_SESSION["username"];
   echo $_SESSION["points"];
    ?>


</body>

</html>
