<?php require_once '../header_ch.php'; ?>
<title>Encryptor</title>  
<body>
		<canvas id="canvas"></canvas>
		
	</body>
<div class="container">
  <div class="encrypt p-5 text-center">
    <h1>Encryptor</h1>
    <p>I am The Super Duper Encryptor in the internet. I can encrypt everything that you want. No one can crack my cipher !!</p>
    <div class="output-box m-auto">
      <form method="POST" action="#" class="text-center d-flex mb-2">
        <input type="text" name="cypher" value="<?php echo isset($_POST['cypher']) ? $_POST['cypher'] : ''; ?>" class="w-100">
        <input type="submit" value="Encrypt" class="ml-1">
      </form>
      <?php
      if (isset($_POST['cypher'])) {
          $cypher = $_POST['cypher'];
          $rot_13 = str_rot13($cypher);
          $base_64 = base64_encode($rot_13);
          echo '<p>Ciphertext : '.$base_64.'</p>';
      }
      ?>

    </div>

  </div>
</div>
<script src="Matrix-code-rain-master/script.js"></script>
