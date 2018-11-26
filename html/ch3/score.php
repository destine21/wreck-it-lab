<?php require_once('../header_ch.php'); ?>

<div class="container">
  <div class="hammer">
    <img src="images/hammer.gif" alt="">
  </div>
  <div class="score">
    <!-- <h1>Beat the score</h1>
    <h4>Try to beat the high score to win this.</h4>
    <h6>How to play :</h6>
    <ul class="mb-4">
      <li>Click on the button to hope to generate a great score</li>
      <li>Highest score is <strong>100</strong></li>
    </ul> -->
    <?php 
         if(isset($_POST["score"])){
           $score = $_POST["score"];
             if($_POST["score"] < 100){
                echo "<div class='wrong-score'>" ;
                echo $_POST["score"] ;
                echo "</div>" ;
             }else{
                echo "<p>OH MY GOSH, <strong>";
                echo $_POST["score"];
                echo "</strong> score! This is insane.</p> ";
                echo "<h1>Here is your flag : <strong>Th1s_i5_H7TP_P0S7_R3que5t</strong></h1>";
             }
        }
    
        ?>
      <div>


     <input orient='270deg' type='range' min='0' value=<?php echo $score; ?> max='110' step='20' disabled/>
     <form action="" method="post" onsubmit="document.getElementsByName('score')[0].value = Math.floor(Math.random() * 99)" class="mt-3 text-center">
      <input type="hidden" name="score" value="-1" />
      <input type="submit" name="generate" value="HIT!">
    </form>
    </div>
  </div>
</div>

</body>
</html>