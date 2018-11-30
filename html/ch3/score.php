<?php require_once('../header_ch.php'); ?>

<div class="container mt-4">
  <div class="title p-1 position-absolute text-light">
    <h1>Beat the High Score !!!</h1>
    <h3>High Score : 100</h3>
  </div>
  <div class="score">
    <div class="d-flex">
      <div class="m-5">
        <?php 
            $score = 0;
            if(isset($_POST["score"])){
             $score = $_POST["score"];
               if($_POST["score"] < 100){
                  echo "<div class='wrong-score mt-5'><p>" ;
                  echo $_POST["score"] ;
                  echo "</p></div>" ;
               }else{
                  echo "<div class='pass-score mt-5'><p>";
                  echo $_POST["score"];
                  echo "</p> ";
                  echo "<h1>Here is your flag : <strong>Th1s_i5_H7TP_P0S7_R3que5t</strong></h1> </div>";
               }
          }
      
          ?>
      </div>
      <div class="mt-3">
        <input orient='270deg' type='range' min='0' value=<?php echo $score; ?> max='110' step='20' disabled/>
        <form action="" method="post" onsubmit="document.getElementsByName('score')[0].value = Math.floor(Math.random() * 99)"
          class="mt-3 text-center">
          <input type="hidden" name="score" value="-1" />
          <input type="submit" name="generate" value="HIT!">
        </form>
      </div>
      <div class="hammer">
        <img src="images/hammer.gif" alt="">
      </div>
    </div>
  </div>

  </body>

  </html>