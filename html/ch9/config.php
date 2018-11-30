<?php
$servername='localhost:3306';    
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

    echo '<script language="javascript">';
    echo 'alert("You need to create database first!")';
    echo '</script>';
  }
} 
?>


