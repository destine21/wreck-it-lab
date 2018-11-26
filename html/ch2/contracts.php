<?php require_once('../header_ch.php'); ?>
<link rel="stylesheet" href="../../assets/fontAwesome/css/all.css">

<div class="container mt-5 pt-3">
    <h1>
        <?php
        if(isset($_GET['url'])){
            $url=$_GET['url'];
            if($url == "https://www.evil.c0m"){
                echo "flag{0pen_Redir3ct}";
            }
            echo "<script>window.location.href = '$url';</script>";
        }
        ?>
    </h1>
    <div class="rotate-container">
        <div class="card front-card">
            <img src="images/logo-front.png" alt="">
        </div>
        <div class="card back-card">
            <div class="d-flex h-100">
                <div class="logo">
                    <img src="images/logo-back.png" alt="">
                </div>
                <div class="contact align-self-end">
                    <!-- <h1>Contact Us</h1> -->
                    <table>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-mobile-alt"></i></td>
                                <td>0888888888</td>
                            </tr>
                            <tr>
                                <td><i class="far fa-envelope"></i></td>
                                <td>wreck_it_lab@mail.com</td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-map-marker-alt"></i></td>
                                <td>999/999 Disney st. Bong dist. Thailand 10000 </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="social d-flex mt-2">
                        <a href="?url=https://www.facebook.com/"><div class="fb"><i class="fab fa-facebook-f"></i></div></a>
                        <a href="?url=https://www.twitter.com/"><div class="tweet"><i class="fab fa-twitter"></i></div></a>
                        <a href="?url=https://www.youtube.com/"><div class="yt"><i class="fab fa-youtube"></i></div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function() {
  // For card rotation
     $('.container').click(function(){
          $('.front-card').toggleClass(' rotate-card-front');
          $('.back-card').toggleClass(' rotate-card-back');
     });
  });
</script>
