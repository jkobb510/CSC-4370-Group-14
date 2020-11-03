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

      <div class="box">Category 1</div>
      <div class="box">Category 2</div>
      <div class="box">Category 3</div>
      <div class="box">Category 4</div>
      <div class="box">Category 5</div>
      <div class="box"> <a href="question.php"> $100</a></div>
      <div class="box">$100</div>
      <div class="box">$100</div>
      <div class="box">$100</div>
      <div class="box">$100</div>
      <div class="box">$200</div>
      <div class="box">$200</div>
      <div class="box">$200</div>
      <div class="box">$200</div>
      <div class="box">$200</div>
      <div class="box">$300</div>
      <div class="box">$300</div>
      <div class="box">$300</div>
      <div class="box">$300</div>
      <div class="box">$300</div>
      <div class="box">$400</div>
      <div class="box">$400</div>
      <div class="box">$400</div>
      <div class="box">$400</div>
      <div class="box">$400</div>
      <div class="box">$500</div>
      <div class="box">$500</div>
      <div class="box">$500</div>
      <div class="box">$500</div>
      <div class="box">$500</div>

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