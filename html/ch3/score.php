<!doctype html>
<html lang="en">
  <head>
    <title>Beat the score</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
    <h1>Beat the score</h1>
    <h5>Try to beat the high score to win this.</h5>
    <ul>
        <li>How to play: click on the button to hope to generate a great score</li>
        <li>Highhest score: <strong>100</strong></li>
    </ul>
    
    <?php 
     if(isset($_POST["score"])){
         if($_POST["score"] < 100){
            echo "<p>To poor your score is <strong>" ;
            echo $_POST["score"] ;
            echo "</strong>. You can't beat me bwahaha.</p>" ;
         }else{
            echo "<p>OH MY GOSH, <strong>";
            echo $_POST["score"];
            echo "</strong> score! This is insane.</p> ";
            echo "<h1>Here is your flag : <strong>Th1s_i5_H7TP_P0S7_R3que5t</strong></h1>";
         }
    }

    ?>
    
    <form action="" method="post" onsubmit="document.getElementsByName('score')[0].value = Math.floor(Math.random() * 100)">
            <input type="hidden" name="score" value="-1" />
            <input type="submit" name="generate" value="HIT!">
    </form>
    
  </body>
</html>