
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

      <div class="title"> Category: Science </div>
       

      <div id="question" class="question">The discovery of this drug changed the course medicine as it was the first effective drug to fight off infection. </div>

      <label class="option"><input type="radio" name="question-9-answers" value="A" />radio waves <span
            id="question-answers-A"></span>Azithromycin (Zithromax/Z-Pak)</label>

      <label class="option"><input type="radio" name="question-9-answers" value="B" /> infrared waves<span
            id="question-answers-B">Acetaminophen (Tylenol)</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="C" />microwaves <span
            id="question-answers-C">Penicillin</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="D" />All of the above <span
            id="question-answers-D">NSAIDs</span></label>

      <input class="button" type="submit" value="Submit">
</form>

   <?php 
   echo $_SESSION["username"];
   echo $_SESSION["points"];
    ?>
</body>

</html>
