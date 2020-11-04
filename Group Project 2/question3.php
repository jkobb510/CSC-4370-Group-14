  
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>Question #1</title>
</head>

<body>
   <?php session_start(); ?>
   <form action="answer.php" method="POST" class="container">
         <div class="title"> Category: "Technology" </div>

      <div id="question" class="question"> Short for WebLog – an online journal that is frequently updated </div>

      <label class="option"><input type="radio" name="question-1-answers" value="A" /> <span
            id="question-1-answers-A">Blog</span></label>

      <label class="option"><input type="radio" name="question-1-answers" value="B" /> <span
            id="question-1-answers-B">Thread</span></label>

      <label class="option"><input type="radio" name="question-1-answers" value="C" /> <span
            id="question-1-answers-C">Interactive Journalism</span></label>

      <label class="option"><input type="radio" name="question-1-answers" value="D" /> <span
            id="question-1-answers-D">Think Tank</span></label>

      <input class="button" type="submit" value="Submit">
   </form>

   <?php 
   echo $_SESSION["username"];
   echo $_SESSION["points"];
    ?>
</body>

</html>
