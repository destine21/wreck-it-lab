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

$sql = "SELECT chapter FROM score WHERE state = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo '<style type="text/css">';
    while($row = $result->fetch_assoc()) {
        echo '.check'.$row['chapter'].' {';
        echo 'opacity:1 ;}';
    }
    echo ' </style>';
} else {
    // echo "0 results";
}
$conn->close();
?>