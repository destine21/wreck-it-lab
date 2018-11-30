<!doctype html>
<?php $flag = "test"; ?>
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

  <h1>File</h1>&nbsp;|&nbsp;
  <a href="?page=home.php">Home</a>&nbsp;|&nbsp;
  <a href="?page=about.php">About</a>&nbsp;|&nbsp;
  <a href="?page=contact.php">Contact</a>&nbsp;|&nbsp;
  
  <?php
  if(isset($_GET['page'])){
    $page = $_GET['page'];
    include($page); 
  }
  ?>
    
  </body>
</html>