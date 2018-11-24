<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <title>Secret Room</title>

    <style>
        .cover{
            height: 100vh;
            margin: 0px;
        }
        img.sign{
            margin: 10px;
            width: 20%;
            background-color: #fff;
            border-radius: 50%;
        }
    </style>
</head>

<?php
    if(!isset($_COOKIE['user'])){
        setcookie("user", "UmFscGg6Z3Vlc3Q=", time() + (86400 * 30), ".");
    }else{
        $userData = urldecode(base64_decode($_COOKIE['user']));
        $role = explode(":", $userData)[1];
        if($role === "admin"){
            echo '<div class="jumbotron cover text-center">
            <h1 class="display-4">Secret Room!</h1>
            <p class="lead">Wellcome back Administrator</p>
            <h3>here is your flag <i>flag{Co0kies_!s_So_Yummy~}</i></h3>
            <hr class="my-4">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni doloribus voluptas quisquam, molestiae esse dolores repudiandae reprehenderit vel quod laboriosam, pariatur aspernatur! Maiores, perferendis repellat veritatis assumenda suscipit voluptate!</p>
        </div>';
            die;
        }
    } 
?>

<body>
    <div class="jumbotron cover text-center">
        <h1 class="display-4">Secret Room!</h1>
        <img src="images/stop.png" alt="" class="sign">
        <p class="lead">YOU ARE NOT ALLOW TO GET IN HERE !! THIS PLACE IS ONLY FOR ADMIN !!</p>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consequuntur magni doloribus voluptas quisquam, molestiae esse dolores repudiandae reprehenderit vel quod laboriosam, pariatur aspernatur! Maiores, perferendis repellat veritatis assumenda suscipit voluptate!</p>
    </div>
</body>

</html>