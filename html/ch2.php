<?php $page = 'ch2'; ?>
<?php
        if (isset($_POST['en_pass'])) {
            $flag = $_POST['en_pass'];
            if ($flag == "flag{It's_a_0pen_Redir3ct}") {
                $isPass = true;
                $ch = 2;
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
                        <h1>Open Redirect&nbsp;<span>(15 points)</span></h1>
                        <h4>E-Business Card</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>วันหนึ่งท่านได้มีโอกาสพบเจอกับประธานบริษัท Amazing บริษัทยักษ์ใหญ่ที่เปิดเว็บไซต์ขายของออนไลน์ ระหว่างคุยกันนั้นประธานบริษัทรู้สึกถูกใจในตัวท่านมาก หลังคุยเสร็จท่านเองก็สนใจอยากจะลองสมัครงานที่บริษัทแห่งนี้ในตำแหน่ง Web Developer ดู ท่านเลยขอนามบัตรของประธานบริษัทมาเพื่อหวังจะใช้เส้นสายในการฝากตัวเข้าทำงาน แต่ทว่านามบัตรของประธานบริษัทหมดพอดี 
                        ท่านเลยได้นามบัตรออนไลน์มาแทน ด้วยจิตวิญญาณแห่งการเป็น Web Developer ขั้นเทพของท่าน ท่านสัมผัสได้ว่านามบัตรออนไลน์นี้มีช่องโหว่อยู่ </p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ทำให้หน้าเว็บไซต์นี้มุ่งไปที่ https://www.evil.c0m ให้ได้เพื่อทดสอบว่ามีช่องโหว่อยู่จริงตามที่ท่านสัมผัสได้รึเปล่า</p>
                        <a href="ch2/contact.php" target="blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Unvalidated_Redirects_and_Forwards_Cheat_Sheet">Unvalidated Redirects and Forwards Cheat Sheet</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - ลองดูที่ URL ที่ลิงค์ไปดีๆสิ ว่ามันลิงค์ไปแบบไหน
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
                                                    - จะสังเกตได้ว่าเมื่อกดที่ปุ่ม facebook, twitter, youtube จะถูกพาไปยัง /redirect.php?url=... โดยหากเราเปลี่ยน parameter url จะทำให้ redirect ไปที่ URL ที่เราต้องการได้ จากโจทย์ให้ redirect ไปที่ "https://www.evil.c0m" เมื่อใส่ใน parameter url ก็จะพบกับ flag
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - ไม่นำ user input มาทำการ redirect แต่หากมีความจำเป็นต้องทำ ก็ให้ทำการ whitelist เฉพาะ URL ที่อนุญาตเท่านั้น ไม่ให้ทำการรับ user input แล้วนำมาทำการ redirect ตรง ๆ เพราะจะเกิดเป็นช่องโหว่ Open redirect ได้
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