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
                        <a href="ch8/pages.php?page=home.php" target="blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a href="https://www.owasp.org/index.php/Testing_for_Local_File_Inclusion">Testing for Local File Inclusion</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - บน URL parameter นั่นอะไรอะ ชื่อไฟล์หรอ?
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
                                                    - ด่านนี้หากสังเกตที่ URL เมื่อเรากดเปลี่ยนหน้า จะเปลี่ยนแค่ URL parameter ที่ชื่อว่า page เท่านั้น ซึ่งลักษณะเหมือนการ include file เข้ามา ดังนั้นจึงต้องลองทดสอบ Local file inclusion ด้วยการเซ็ตค่า page=../../../../../../../../../etc/passwd และ เมื่อสามารถทำ Local file inclusion ได้แล้วก็ไปอ่านไฟล์ ตามที่โจทย์บอกก็จะได้ flag
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - ข้อนี้มีการใช้ PHP include() ที่รับ input มาจาก URL parameter โดยไม่ทำการ validate ข้อนี้ วิธีแก้คือไม่ควรที่จะให้มี user input เข้ามาที่ฟังก์ชัน include() หรือหากมีให้ ทำการ whitelist เฉพาะรายการที่อนุญาตเท่านั้น
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