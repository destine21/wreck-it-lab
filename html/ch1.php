<?php $page = 'ch1'; ?>
<?php
        if (isset($_POST['en_pass'])) {
            $flag = $_POST['en_pass'];
            if ($flag == 'flag{Javascr1pt_is_s0_s3cure}') {
                $isPass = true;
                $ch = 1;
                require_once 'database/setState.php';
            } else {
                $isPass = false;
            }
        }
?>
<?php require_once 'header.php'; ?>
<?php require_once 'header_home.php'; ?>

    <div class="bg-main">
        <div class="content-wrapper mx-0">
            <div class="content-banner">
                <div class="header-score">
                    <div>
                        <h1>Client-side Authentication&nbsp;<span>(15 points)</span></h1>
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
                        <a href="ch1/login1.php" target="blank" class="btn btn-primary" role="button">Start the Lab</a>            
                    </div>
                    <div>
                        <h5>Validation</h5>
                        <?php
                            if (isset($isPass)) {
                                if ($isPass) {
                                    echo '<div class="alert alert-success">Well Done!</div>';
                                } else {
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
                            <li><a href="https://www.w3schools.com/js/js_whereto.asp">JavaScript Where To</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - ลองใช้ developer tools(f12) แล้วมองหาฟังก์ชันในไฟล์ JavaScript
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
                                                    - เมื่อใช้ developer tools จะเห็นว่าเมื่อกดปุ่ม login จะไปเรียกฟังก์ชัน authenticate ในไฟล์ /login.js จะเห็นว่ามีการเช็ค username, password ที่ฝังอยู่ใน JavaScript เมื่อนำไปใช้ จะได้ flag ออกมา
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - การทำการ authentication ด้วย JavaScript เป็นการทำฝั่ง Client-side ซึ่ง code ทุกอย่างจะสามารถดูได้จากฝั่ง user ทำให้ใครที่เข้าถึงหน้านั้น ๆ ได้ก็จะสามารถ Bypass authentication นั้น ๆ ได้ วิธีแก้ไขคือการทำการ authentication ที่ฝั่ง server จะต่อกับฐานข้อมูลหรือไม่ก็ได้ ซึ่ง code ที่เขียนและรัน จะอยู่ฝั่ง server เท่านั้น user ทั่วไปจะไม่สามารถเข้าถึง code การทำงานในส่วนนั้นได้
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