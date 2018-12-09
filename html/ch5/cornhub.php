<?php require_once('../header_ch.php') ?>
<title>Secret Room</title>


<?php
    if(!isset($_COOKIE['user'])){
        setcookie("user", "UmFscGg6Z3Vlc3Q=", time() + (86400 * 30), ".");
    }else{
        $userData = urldecode(base64_decode($_COOKIE['user']));
        $role = explode(":", $userData)[1];
        if($role === "admin"){ ?>
    <div class="cornhub px-3">
        <p class="lead">Welcome back Administrator <span>flag{Co0kies_!s_So_Yummy~}</span></p>
    </div>
    <img src="images/cornhub.png" alt="" class="w-100">

<?php  die;
        }
    } 
?>
<section>
    <div class="container">
        <div class="text-center">
            <!-- <h1 class="display-4">Secret Room!</h1> -->
            <div class="sign px-0 px-ml-5 mx-auto">
                <div class="m-auto"><img src="images/asdf.jpg" alt="" class="w-100"></div>
                <h2>เว็บไซต์นี้มีเนื้อหาและข้อมูลที่ไม่เหมาะสม<br>ถูกระงับโดยกระทรวงเวทมนต์<br><span>*
                        อนุญาตเฉพาะแอดมินกระทรวงเวทมนต์เท่านั้น</span></h2>
            </div>
        </div>
    </div>
</section>

</html>