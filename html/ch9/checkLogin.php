<?php
require "config.php";

$tbl_name="users"; 
global $link;
mysqli_connect("$servername", "$dbusername", "$dbpassword")or die("Connection Failed");

$myusername=$_POST['uname'];
$mypassword=$_POST['psw'];

$sql="SELECT * FROM $tbl_name WHERE username ='$myusername' and password ='$mypassword'";

$result=mysqli_query($link,$sql);

$count=mysqli_num_rows($result);

if($count != 0){
  echo '<script language="javascript">';
  echo 'window.location.href="loggedin.php";';
  echo '</script>';
}
else {
  echo '<script language="javascript">';
  echo 'alert("Wrong username or password");';
  echo 'window.location.href="login.php";';
  echo '</script>';
}

?>