<?php require_once('../header_ch.php') ?>
<title>Secret Room</title>

<div class="container">
    <div class="text-center">
<?php
    if(!isset($_COOKIE['user'])){
        setcookie("user", "UmFscGg6Z3Vlc3Q=", time() + (86400 * 30), ".");
    }else{
        $userData = urldecode(base64_decode($_COOKIE['user']));
        $role = explode(":", $userData)[1];
        if($role === "admin"){ ?>

        <h1 class="display-4">Secret Room!</h1>
        <p class="lead">Wellcome back Administrator</p>
        <h3>here is your flag <i>flag{Co0kies_!s_So_Yummy~}</i></h3>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni doloribus voluptas quisquam,
            molestiae esse dolores repudiandae reprehenderit vel quod laboriosam, pariatur aspernatur! Maiores,
            perferendis repellat veritatis assumenda suscipit voluptate!</p>
    

<?php  die;
        }
    } 
?>

        <!-- <h1 class="display-4">Secret Room!</h1> -->
        <div class="sign p-5">
            <div class="m-auto"><img src="images/asdf.jpg" alt="" class="w-100"></div>
            <h2>เว็บไซต์นี้มีเนื้อหาและข้อมูลที่ไม่เหมาะสม<br>ถูกระงับโดยกระทรวงเวทมนต์</h2>
        </div>
        <!-- <p class="lead">YOU ARE NOT ALLOW TO GET IN HERE !! THIS PLACE IS ONLY FOR ADMIN !!</p>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni doloribus voluptas quisquam,
            molestiae esse dolores repudiandae reprehenderit vel quod laboriosam, pariatur aspernatur! Maiores,
            perferendis repellat veritatis assumenda suscipit voluptate!</p> -->
    </div>
</div>

</html>