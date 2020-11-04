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
      <div class="box"> <a href="question.html"> $100</a></div>
      <div class="box"><a href="question6.html">$100 </a></div>
      <div class="box"><a href="question11.html">$100 </a></div>
      <div class="box"><a href="cell.html">$100 </a></div>
      <div class="box"><a href="misc1.html">$100 </a></div>
      <div class="box"><a href="question2.html"> $200</a></div>
      <div class="box"><a href="question7.html">$200</a></div>
      <div class="box"><a href="dicaprio_Q.html">$200</a></div>
      <div class="box"><a href="waves.html">$200</a></div>
      <div class="box"><a href="misc2.html">$200</a></div>
      <div class="box"><a href="question3.html">$300</a></div>
      <div class="box"><a href="question8.html">$300</a></div>
      <div class="box"><a href="foreign.html">$300</a></div>
      <div class="box"><a href="bond.html">$300</a></div>
      <div class="box"><a href="misc3.html">$300</a></div>
      <div class="box"><a href="question4.html">$400</a></div>
      <div class="box"><a href="question9.html">$400</a></div>
      <div class="box"><a href="marriagestory_q.html">$400</a></div>
      <div class="box"><a href="medicine.html">$400</a></div>
      <div class="box"><a href="misc4.html">$400</a></div>
      <div class="box"><a href="question5.html">$500</a></div>
      <div class="box"><a href="question10.html">$500</a></div>
      <div class="box"><a href="musk_q.html">$500</a></div>
      <div class="box"><a href="keto.html">$500</a></div>
      <div class="box"><a href="misc5.html">$500</a></div>

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
