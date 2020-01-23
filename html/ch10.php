<?php $page = 'ch10';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{F4k3Bo0k_1s_Not_Fac3B0ok}"){
                $isPass = true;
                $ch = 10;
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
                        <h1>Cross Site Scripting (XSS)&nbsp;<span>(200 points)</span></h1>
                        <h4>The Social Media</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>ท่านได้รับคำสั่งให้มาทำการทดสอบเจาะระบบ Social Media เจ้าหนึ่งที่กำลังอยู่ในช่วงทดสอบระบบ Post ข้อความ โดยเว็บนี้จะมี Admin คอยเข้ามาดูแลความเรียบร้อยของระบบทุก ๆ 1 นาที ภารกิจของท่าน คือการขโมย Cookie ของ Admin คนนั้นมาให้ได้ !!</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ขโมย Cookie ของ Admin ระบบนี้</p>
                        <a href="ch10/fakebook.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)">Cross-site Scripting (XSS)</a></li>
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Stored_Cross_site_scripting_(OTG-INPVAL-002)">Testing for Stored Cross site scripting</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->