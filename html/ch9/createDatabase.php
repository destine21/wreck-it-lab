<?php
$servername='localhost';    
$dbusername='root';                
$dbpassword='';               
$dbname='wreck-it-lab';     

connecttodb($servername,$dbname,$dbusername,$dbpassword);
function connecttodb($servername,$dbname,$dbusername,$dbpassword){
  global $link;
  $link=mysqli_connect("$servername","$dbusername","$dbpassword");
  if(!$link){
    die("Failed!!");
  }
  $db_selected =  mysqli_select_db($link,"$dbname");
  if (!$db_selected) {

      $filename = 'wreck-it-lab.sql';
    // Temporary variable, used to store current query
      $templine = '';
    // Read in entire file
      $lines = file($filename);
    // Loop through each line
      foreach ($lines as $line){
    // Skip it if it's a comment
          if (substr($line, 0, 2) == '--' || $line == '')
       continue;
    // Add this line to the current segment
      $templine .= $line;
    // If it has a semicolon at the end, it's the end of the query
    if (substr(trim($line), -1, 1) == ';'){
    // Perform the query
        mysqli_query($link,$templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error() . '<br /><br />');
    // Reset temp variable to empty
       $templine = '';
     }
    }
    echo '<script language="javascript">';
    echo 'alert("Create Database Successfully");';
    echo 'window.location.href="login.php";';
    echo '</script>';

  }
} 
?>


