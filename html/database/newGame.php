<?php
$servername = 'localhost:3306';
$dbusername = 'root';
$dbpassword = '';
$dbname = '';

//set cookie for ch5
setcookie('user', 'UmFscGg6Z3Vlc3Q=', time() + (86400 * 30), '/ch5');

//ch 13 reset folder
system('rm /var/www/html/ch13/inventory/* ; cp /var/www/html/ch13/inventory.tmp/* /var/www/html/ch13/inventory/;');

connecttodb($servername, $dbname, $dbusername, $dbpassword);
function connecttodb($servername, $dbname, $dbusername, $dbpassword)
{
    global $link;
    $link = mysqli_connect("$servername", "$dbusername", "$dbpassword");
    if (!$link) {
        die('Failed!!');
    }
    $db_selected = mysqli_select_db($link, "$dbname");
    if (!$db_selected) {
        $filename = 'database.sql';
        $templine = '';
        $lines = file($filename);
        foreach ((array) $lines as $line) {
            if (substr($line, 0, 2) == '--' || $line == '') {
                continue;
            }
            $templine .= $line;
            if (substr(trim($line), -1, 1) == ';') {
                mysqli_query($link, $templine) or print 'Error performing query \'<strong>'.$templine.'\': '.mysqli_error().'<br /><br />';
                $templine = '';
            }
        }
        echo '<script language="javascript">';
        echo 'alert("You just start the new game!");';
        echo 'window.location.href="../index.php";';
        echo '</script>';
    }
}

?>


