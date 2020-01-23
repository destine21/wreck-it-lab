<?php $page = 'ch12';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{0s_comm4nd_inj3ction}"){
                $isPass = true;
                $ch = 12;
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
                        <h1>OS Command Injection&nbsp;<span>(150 points)</span></h1>
                        <h4>RAM Eater Browser</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>บริษัท Startup หน้าใหม่ได้พัฒนาสุดยอด Web Browser ที่อยู่ใน Web Browser อีกทีนึงขึ้นมา และเคลมว่า Web Browser ของตนนั้นเป็นที่สุดแล้วในโลกของ Internet ภารกิจที่ท่านได้รับมา คือทำการทดสอบเจาะระบบ Web Browser ที่พูดถึงนี้</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ยึดเครื่องเซิร์ฟเวอร์ แล้วอ่าน flag ออกมาจากระบบ</p>
                        <a href="ch12/chroome.php?url=https%3A%2F%2Fgithub.com" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Command_Injection">Command Injection</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->