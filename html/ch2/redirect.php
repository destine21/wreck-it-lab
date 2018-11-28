<?php
    if(isset($_GET['url'])){
        $url=$_GET['url'];
        echo "Redirecting...";
        if(substr( $url, 0, 20 ) === "https://www.evil.c0m"){
            echo "<h1>flag{It's_a_0pen_Redir3ct}</h1>";
        }
        echo "<script>setTimeout(()=>{window.location.href = '$url';},500)</script>";
    }
?>