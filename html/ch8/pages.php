<!DOCTYPE html>
<html lang="en">
<?php require_once '../header_ch.php'; ?>

<head>
  <meta charset="utf-8">
  <title>Wreck-it-down Company</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Custom fonts for this template -->
  <link rel="stylesheet" href="../assets/fontAwesome/css/all.css">
  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger">WRECK IT DOWN COMPANY</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button"
        data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="?page=home.php">Home</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="?page=about.php">About</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded" href="?page=contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</body>

</html>


<?php
      if (isset($_GET['page'])) {
          $page = $_GET['page'];
          include $page;
      }
?>