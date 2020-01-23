<?php $page = 'ch5';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{Co0kies_!s_So_Yummy~}"){
                $isPass = true;
                $ch = 5;
                require_once('database/setState.php');
            }
            else {
                $isPass = false;
            }
        }
?>
<?php require_once('header.php') ?>
<?php require_once('header_home.php') ?>
    <div class="bg-main">
        <div class="content-wrapper mx-0">
            <div class="content-banner">
                <div class="header-score">
                    <div>
                        <h1>Privilege Escalation&nbsp;<span>(50 points)</span></h1>
                        <h4>Blocked Website</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>เจ้านายของท่านโทรศัพท์มากลางดึก บอกว่าเว็บไซต์เพื่อการศึกษาวิธีผสมพันธุ์ข้าวโพด ที่ดูอยู่เป็นประจำโดน Block ช่วยหาวิธีเข้าไปดูให้หน่อย ขอด่วน ๆ ท่านที่กำลังอยู่ในชุดนอนก็เลยไม่ได้นอน ต้องลุกมาทำภารกิจพิเศษหาทางเข้าเว็บไซต์เพื่อการศึกษานี้ให้ได้</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>หาทางเข้าเว็บไซต์เพื่อการศึกษานี้ให้ได้</p>
                        <a href="ch5/cornhub.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
                    </div>
                    <div>
                        <h5>Validation</h5>
                        <?php
                            if(isset($isPass)){
                                if($isPass){
                                    echo '<div class="alert alert-success">Well Done!</div>';
                                }
                                else {
                                    echo'<div class="alert alert-danger">Nahh Try it again.</div>';
                                }
                            }
                        ?>
                        <form action="" method="POST">
                            <label for="en_pass">Enter flag :</label>
                            <input type="text" name="en_pass">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                    <div>
                        <h5>Related resource(s)</h5>
                        <ul class="resource"> 
                            <li><a target="_blank" href="https://www.w3schools.com/php/php_cookies.asp">PHP 5 Cookies</a></li>
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Session_Management_Cheat_Sheet">Session Management Cheat Sheet</a></li>
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/Base64">Base64</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->