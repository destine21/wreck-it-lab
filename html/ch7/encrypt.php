<?php require_once('../header_ch.php'); ?>

<div class="container">
  <h1>Encryptor</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum laborum eaque
    debitis rem sapiente! Ea, tempore. Architecto nesciunt, quam officiis saepe, commodi nulla
    asperiores vel maxime praesentium fugit voluptas? Harum!</p>
  <form method="POST" action="#">
    <input type="text" name="cypher" value="<?php echo isset($_POST['cypher']) ? $_POST['cypher'] : '' ?>" style="width:50%">
    <input type="submit" value="Encrypt">
  </form>
  
  <?php
  if(isset($_POST['cypher'])){
    $cypher = $_POST['cypher'];
    $rot_13 = str_rot13($cypher);
    $base_64 =  base64_encode($rot_13);
    echo "Output: ".$base_64;
  }
  ?>
</div>