<?php require_once('../header_ch.php'); ?>

<div class="container">
  <div class="score">
    <h1>Beat the score</h1>
    <h4>Try to beat the high score to win this.</h4>
    <h6>How to play :</h6>
    <ul class="mb-4">
      <li>Click on the button to hope to generate a great score</li>
      <li>Highest score is <strong>100</strong></li>
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
    
    <form action="" method="post" onsubmit="document.getElementsByName('score')[0].value = Math.floor(Math.random() * 100)" class="text-center">
      <input type="hidden" name="score" value="-1" />
      <input type="submit" name="generate" value="HIT!">
    </form>
  </div>
</div>