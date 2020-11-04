
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
      <div class="title"> Category: Pop Culture </div>
       

      <div id="question" class="question"> What was the first non-English-language film to win Best Picture at the Oscars? </div>

      <label class="option"><input type="radio" name="question-9-answers" value="A" /> <span
            id="question-answers-A">Pan’s Labyrinth</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="B" /> <span
            id="question-answers-B">Spirited Away</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="C" /> <span
            id="question-answers-C">Amélie</span></label>

      <label class="option"><input type="radio" name="question-9-answers" value="D" /> <span
            id="question-answers-D">Parasite</span></label>

      <input class="button" type="submit" value="Submit">
</form>

   <?php 
   echo $_SESSION["username"];
   echo $_SESSION["points"];
    ?>
</body>

</html>
