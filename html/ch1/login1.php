<?php require_once('../header_ch.php'); ?>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans);
        * {
        padding: 0;
        margin: 0;
        }

        html {
        font-family: Open Sans;
        overflow: hidden;
        }
        .Page1 {
        z-index: 2;
        position: relative;
        background: url("Fixit.jpeg") center;
        background-size: 100vw 100vh;
        width: 100vw;
        height: 100vh;
        }
        .Page1 h1 {
        position: relative;
        color: #FFF;
        font-size: 5em;
        font-family: Open Sans;
        top: 65vh;
        }

        .Page2 {
        z-index: 1;
        position: relative;
        background: url("fixit_bg.jpg") no-repeat;
        background-size: 100vw 100vh;
        width: 100vw;
        height: 100vh;
        top: -100vh;
        }

        .userLogo {
        width: 15em;
        height: 15em;
        position: relative;
        margin: 0em auto;
        display: block;
        }
        .userLogo img {
        width: 15em;
        height: 15em;
        border-radius: 10em;
        }

        .userName {
        text-align: center;
        color: #FFF;
        margin: 1em 0em 1em 0em;
        }

        .userEmail {
        text-align: center;
        color: #FFF;
        margin: 1em 0em 1em 0em;
        }

        .passwordInput {
        position: relative;
        margin: 0 auto;
        display: block;
        font-size: 2em;
        width: 10em;
        outline: none;
        border: rgba(204, 204, 204, 0.7) solid;
        }

        .ch1-wrapper{

        }

</style>
<!-- <div class="bg-main"> -->
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
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
            <div class="userLogo"><img class="mt-2" src="Felix.jpg"/></div>
            <div class="userEmail">
                        <div class="container">
                    <div class="ch1-wrapper w-50 mx-auto pt-3">
                        <form name="login" method="POST" action>
                            <input type="username" name="username" class="form-control rounded-0 mt-3" placeholder="Username">
                            <input type="password" name="password" class="form-control rounded-0 mt-2" placeholder="Password">
                            <button onclick="authentication()" class="rounded btn-primary w-50 mt-4">LOGIN</button>
                        </form>
                    </div>
                 </div>
            </div>
        </div>
        </div>
</html>
<!-- </div> -->

<script type="text/javascript" src="login1.js"></script>

