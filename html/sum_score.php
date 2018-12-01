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
$sum = 0 ;
$sql = "SELECT sum(score) As Sum_score from score WHERE state=1";
$query = $conn->query($sql);
$records = mysqli_fetch_array($query);
$sum = $records['Sum_score'];
echo $sum;
$conn->close();
?>