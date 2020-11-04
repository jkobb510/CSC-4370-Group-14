
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Question</title>
</head>

<body>
   <?php session_start(); ?>
   <form action="answer.php" method="POST" class="container">

      <div class="title"> Category: Miscellaneous </div>
       

      <div id="question" class="question">Which of the following is NOT a child of Kanye West? </div>

      <label class="option"><input type="radio" name="question-9-answers" value="A" /><span
            id="question-answers-A">Saint West</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="B" /> <span
            id="question-answers-B">South West</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="C" /> <span
            id="question-answers-C">North West</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="D" /> <span
            id="question-answers-D">Chicago West</span></label>

      <input class="button" type="submit" value="Submit">
</form>

   <?php 
   echo $_SESSION["username"];
   echo $_SESSION["points"];
    ?>
</body>

</html>
