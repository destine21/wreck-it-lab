<?php require_once('../header_ch.php'); ?>
<!-- <div class="bg-main"> -->
<link rel="stylesheet" href="../assets/fontAwesome/css/all.css">
<div class="wrapper">
    <div class="Page1">
        <div class="time">
            <h1>13:37</h1>
        </div>
        <div class="date">
            <h1>2018/12/17</h1>
        </div>
    </div>
    <div class="Page2 pt-5">
        <div class="userLogo mt-2"><img src="Felix.jpg" /></div>
        <div class="userEmail">
            <div class="container">
                <div class="ch1-wrapper mt-4 pt-2">
                    <form name="login" method="POST" action class="mx-auto">
                        <input type="username" name="username" class="form-control rounded-0 " placeholder="Username">
                        <div class="d-flex mt-3">
                            <input type="password" name="password" class="form-control rounded-0 pr-5"placeholder="Password">
                            <button type="button" onclick="authentication()"><i class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="switch mx-auto mt-2">
            Forget Password?
        </div>
    </div>
</div>

</html>
<!-- </div> -->

<script type="text/javascript" src="login1.js"></script>

