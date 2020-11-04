
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Question </title>
</head>

<body>
   <?php session_start(); ?>
   <form action="answer.php" method="POST" class="container">

      <div class="title"> Category: Science </div>
       

      <div id="question" class="question"> Electromagnetic radiation includes  </div>

      <label class="option"><input type="radio" name="question-9-answers" value="A" />radio waves <span
            id="question-answers-A">Microwaves</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="B" /> infrared waves<span
            id="question-answers-B">Radio waves</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="C" />microwaves <span
            id="question-answers-C">UV Light</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="D" />All of the above <span
            id="question-answers-D">All of the above</span></label>

      <input class="button" type="submit" value="Submit">
</form>

   <?php 
   echo $_SESSION["username"];
   echo $_SESSION["points"];
    ?>
</body>

</html>
