<?php $page = 'ch11';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{sh0ld_I_us3_gOog!e_ph07o_1nst3ad}"){
                $isPass = true;
                $ch = 11;
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
                        <h1>Insecure File Upload&nbsp;<span>(150 points)</span></h1>
                        <h4>Image Storage</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>รุ่นน้องปี 3 ที่กำลังเรียน Web programming ได้ทำโปรเจคเกี่ยวกับเว็บฝากรูป รุ่นน้องคนนี้เอางานมาอวดท่าน และต้องการให้ท่านเป็นคน test ระบบให้หน่อย แต่ระหว่างที่ท่านกำลังทดลองใช้ ก็พบจุดที่เว็บนี้อาจจะมีช่องโหว่ จึงรีบทำการทดสอบตามที่คิดไว้ทันที</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ยึดเครื่องเซิร์ฟเวอร์ แล้วอ่าน flag ออกมาจากระบบ</p>
                        <a href="ch11/upload.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Unrestricted_File_Upload">Unrestricted File Upload</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->