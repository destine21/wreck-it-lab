<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "scoring";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "UPDATE score SET state = 1 WHERE chapter = $ch";
$conn->query($sql);

$conn->close();
?>