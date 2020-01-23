<?php $page = 'ch8';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{L0c4l_f1le_Inclus1on}"){
                $isPass = true;
                $ch = 8;
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
                        <h1>Local File Inclusion&nbsp;<span>(75 points)</span></h1>
                        <h4>WRECK IT DOWN COMPANY</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>บริษัทรับจ้างพัฒนาเว็บไซต์แห่งหนึ่ง คิดว่าการทำการทดสอบเจาะระบบเป็นสิ่งที่ไร้สาระ ไม่จำเป็นต้องทำก็ได้ เพราะไม่ได้ทำเว็บเกี่ยวกับธนาคารหรือการเงินใด ๆ ไม่ถูกแฮกหรอก ถ้าแฮกได้เอาไปเลย ล้านนึง คุณซึ่งเป็น Penetration tester กำลังช็อตเงินอยู่พอดี ได้ยินแบบนี้จึงไม่ปล่อยโอกาสนี้ไว้ รีบเปิดเว็บบริษัทแล้วจัดการทันที</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>อ่านข้อมูลจาก flag_ch8.txt ออกมาให้ได้</p>
                        <a href="ch8/pages.php?page=home.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">Testing for Local File Inclusion</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->