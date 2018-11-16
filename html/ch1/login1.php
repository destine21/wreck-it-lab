<?php require_once('../header_ch.php'); ?>
<style>
    .ch1-wrapper{

    }
</style>
<!-- <div class="bg-main"> -->
    <div class="container">
        <div class="ch1-wrapper w-50 mx-auto mt-5 pt-3">
            <div class="">
                <h2>Login</h2>
            </div>
            <form name="login" method="POST" action>
                <input type="username" name="username" class="form-control mt-3" placeholder="Username">
                <input type="password" name="password" class="form-control mt-2" placeholder="Password">
                <button onclick="authentication()" class="btn w-100 mt-4">Login</button>
            </form>
        </div>
    </div>
<!-- </div> -->

<script type="text/javascript" src="login1.js"></script>