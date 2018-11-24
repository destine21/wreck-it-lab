<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "fakebook";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// prepare and bind
$stmt = $conn->prepare("INSERT INTO `posts` (`id`, `content`, `author`, `time`) VALUES (NULL, ?, 'beta_tester@fakebook', CURRENT_TIMESTAMP)");
$stmt->bind_param("s", $content);

// set parameters and execute
$content = $_POST['content'];
$stmt->execute();

echo "New records created successfully";

header( "location: fakebook.php" );

$stmt->close();
$conn->close();
?>