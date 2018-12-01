<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "scoring";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT sum(score) As Sum_score from score WHERE state=1";
$query = $conn->query($sql);
$records = mysqli_fetch_array($query);

if($records['Sum_score'] != 0){
    $sum = $records['Sum_score'];
}
else $sum=0;
echo $sum;
$conn->close();
?>