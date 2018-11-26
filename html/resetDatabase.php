<?php
$servername='localhost';    
$dbusername='root';                
$dbpassword='';               
$dbname='';     

connecttodb($servername,$dbname,$dbusername,$dbpassword);
function connecttodb($servername,$dbname,$dbusername,$dbpassword){
  global $link;
  $link=mysqli_connect("$servername","$dbusername","$dbpassword");
  if(!$link){
    die("Failed!!");
  }
  $db_selected =  mysqli_select_db($link,"$dbname");
  if (!$db_selected) {

      $filename = 'localhost.sql';
      $templine = '';
      $lines = file($filename);
      foreach ((array)$lines as $line){
          if (substr($line, 0, 2) == '--' || $line == '')
          continue;
          $templine .= $line;
          if (substr(trim($line), -1, 1) == ';'){
          mysqli_query($link,$templine) or print('Error performing query \'<strong>' . $templine . '\': ' . mysqli_error() . '<br /><br />');
          $templine = '';
         }
       }
    echo '<script language="javascript">';
    echo 'alert("Create Database Successfully");';
    echo 'window.location.href="index.php";';
    echo '</script>';

   }
} 
?>


