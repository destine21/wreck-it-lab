<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  </head>
  <body>
      <h1>Encryptor</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum laborum eaque 
      debitis rem sapiente! Ea, tempore. Architecto nesciunt, quam officiis saepe, commodi nulla 
      asperiores vel maxime praesentium fugit voluptas? Harum!</p>
      <form  method="POST" action="#" >
      <input type="text" name="cypher" value="<?php echo isset($_POST['cypher']) ? $_POST['cypher'] : '' ?>" style="width:50%"><br>
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
 
  </body>
</html>