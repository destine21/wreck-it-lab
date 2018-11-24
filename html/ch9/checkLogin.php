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

if($count>=1){

  echo '<script language="javascript">';
  echo 'alert("Login successfully this is your flag{SQL_1s_4w3som3}");';
  echo 'window.location.href="login.php";';
  echo '</script>';

}
else {
  echo '<script language="javascript">';
  echo 'alert("Wrong username or password");';
  echo 'window.location.href="login.php";';
  echo '</script>';
}

?>