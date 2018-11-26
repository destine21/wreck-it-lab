<?php
    if(isset($_GET['url'])){
        $url=$_GET['url'];
        echo "Redirecting...";
        if($url == "https://www.evil.c0m"){
            echo "flag{It's_a_0pen_Redir3ct}";
        }
        echo "<script>setTimeout(()=>{window.location.href = '$url';},1000)</script>";
    }
?>