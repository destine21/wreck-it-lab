<?php
$url=$_GET['url'];

if($url == "https://www.evil.com"){
    echo "flag{0pen_Redir3ct}";
}

echo "<script>window.location.href = '$url';</script>"

?>