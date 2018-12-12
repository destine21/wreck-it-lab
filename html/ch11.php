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
                        <h4>Login with Javascript</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quisquam inventore, quaerat nisi ad pariatur distinctio doloribus ut, deserunt debitis, excepturi tempora dignissimos nemo a. Aliquid et eum esse sed?</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>Bypass login and access to the webpage.</p>
                        <a href="ch11/upload.php" target="blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                        <h5>Related ressource(s)</h5>
                        <ul class="resource"> 
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Unrestricted_File_Upload">Unrestricted File Upload</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - จะเกิดอะไรขึ้นถ้าอัพไฟล์มากกว่า 40 ตัวอักษร ? แล้วถ้าอัพไฟล์ที่ไม่ใช่รูปล่ะ ?
                                </div>    
                            </li>
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Solution</h5>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#investAccordion">  
                                     <!-- Button trigger modal -->
                                     <button type="button" class="solution btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                                    Are you sure ?
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body m-3 pb-0">
                                                    <h5 class="mb-2">Solution</h5>
                                                    - ข้อนี้มีการอัพโหลดไฟล์อยู่ เมื่อกดอัพโหลด ก็จะอัพโหลดได้แต่รูป แต่นั่นคือฝั่ง client เราจึงต้องดัก request upload ใน Burp แก้ไข filename และ content ให้เป็น php shell เช่น<br><br>
                                                    //shell.php<br>
                                                    &lt;?php system($_GET['cmd']); ?&gt;<br><br>
                                                    แต่ก็ยังติดที่นามสกุลไฟล์ไม่ใช่ไฟล์รูป กลับไปดูโจทย์ดี ๆ อีกรอบ เมื่อเราสังเกตดู หน้าเว็บบอกว่าชื่อไฟล์จำกัดแค่ 40 ตัว ถ้าอัพมากกว่านั้นจะทำให้ชื่อไฟล์ที่เกินถูกตัดออก!! มาถึงตรงนี้บางคนอาจจะคิดออกแล้ว นั่นคือ อัพไฟล์ ที่มีชื่อ เกิน 40 ตัวและให้ตัดนามสกุลที่เป็น ของรูปออก แล้วก็เหลือไว้แค่ .php เช่น "123456789012345678901234567890123456.php.png" เป็นต้น<br>
                                                    หลังจากนั้นก็เข้าไป รัน os command เพื่อดูว่า flag อยู่ไหน จะพบว่าอยู่ที่ path ../flag_ch11.txt แล้ว cat ../flag_ch11.txt file อ่านมันออกมา จบ ง่าย ๆ ใช่ไหม ^^
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - การทำ feature Upload file ให้ปลอดภัยจำเป็นที่จะต้องตรวจสอบสิ่งที่ผู้ใช้อัพมาให้ดี ต้องทำการตรวจสอบชนิดของไฟล์ หากเป็นไฟล์รูปให้ใช้ ฟังก์ชัน เพื่อตรวจสอบว่าเป็นรุปจริงไหม เช่น getimagesize() ใน PHP และต้องทำการ ตรวจสอบนามสกุลไฟล์ ตรวจสอบขนาดไฟล์ และ ควรที่จะเปลี่ยนชื่อ หลังจากการ อัพโหลดแล้วด้วย และ อาจเพิ่ม security header เช่น "Content-Disposition: Attachment" และ "X-Content-Type-Options: nosniff" ให้ response จาก server เป็น static file เป็นต้น
                                                </div>
                                                <div class="modal-footer mt-0 pt-2 px-4">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>    
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->