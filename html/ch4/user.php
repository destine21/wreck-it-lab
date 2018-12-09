<?php require_once '../header_ch.php'; ?>
     <title>Employee Information</title>
      <h1>User Information</h1>
      <?php
      error_reporting(0);
      $servername = 'localhost:3306';
      $username = 'root';
      $password = '';
      $dbname = 'wreck-it-lab';
      $id = $_GET['id'];
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if (isset($id)) {
          if (!is_numeric($id)) {
              echo 'What are you doing?';
              die;
          }
      }
      if ($conn->connect_error) {
          die('Connection failed: '.$conn->connect_error);
      }
      $sql = "SELECT * FROM users WHERE userID=$id";
        $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'id: '.$row['userID'].'<br>'.' - Name: '.$row['firstname'].' '.$row['lastname'].'<br>'.'- Username: '.$row['username'].'<br>'.'- Email: '.$row['email'].'<br>'.'- Phone: '.$row['phone'].'<br>'.'- Role: '.$row['role'].'<br>';
        }
    } else {
        echo '0 results';
    }
        $conn->close();
      ?>
    
  </body>
</html>