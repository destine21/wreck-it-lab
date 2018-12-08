<?php require_once '../header_ch.php'; ?>

<!-- <div class="bg-main"> -->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link rel="stylesheet" href="../assets/fontAwesome/css/all.css">
</head>
<body>
    
</body>
</html>
    <div class="wrapper">
        <div class="Page1">
            <div class="time">
                 <h1>13:37</h1>
            </div>
            <div class="date">
                <h1>2018/12/17</h1>
            </div>
        </div>
        <div class="Page2">
            <div class="userLogo"><img class="mt-2" src="img/Felix.jpg"/></div>
            <div class="userEmail">
                        <div class="container">
                    <div class="ch1-wrapper w-50 mx-auto pt-3">
                        <form name="login" method="POST" action>
                            <input type="username" name="username" class="form-control rounded-0 mt-3" placeholder="Username">
                            <input type="password" name="password" class="form-control rounded-0 mt-2" placeholder="Password">
                            <button onclick="authentication()" class="rounded btn-primary mt-4"><i class="fas fa-sign-in-alt"></i> LOGIN </button>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
        </div>
</html>
<!-- </div> -->

<script type="text/javascript" src="login1.js"></script>

