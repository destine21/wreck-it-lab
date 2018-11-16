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
      <h1>User Information</h1>
      <?php
      error_reporting(0);
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "wreck-it-lab";
      $id = $_GET['id'];
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      
      // Check connection
      if(isset($id)){
      if(!is_numeric($id)){
          echo "What are you doing?";
          die;
      }
    }
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      $sql = "SELECT * FROM users WHERE userID=$id";
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["userID"]. "<br>". " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>" ."- Username: " .$row["username"]."<br>"."- Email: " . $row["email"]. "<br>"."- Phone: ".$row["phone"]."<br>"."- Role: ".$row["role"]."<br>";
      }
    } else {
      echo "0 results";
    }
        $conn->close();
      ?>
    
  </body>
</html>