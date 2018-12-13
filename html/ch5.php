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
?php require_once('header.php') ?>
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
                        <h5>Related ressource(s)</h5>
                        <ul class="resource"> 
                            <li><a target="_blank" href="https://www.w3schools.com/php/php_cookies.asp">PHP 5 Cookies</a></li>
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Session_Management_Cheat_Sheet">Session Management Cheat Sheet</a></li>
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/Base64">Base64</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - มีอะไรอยู่ใน Cookie หรือเปล่าน้า
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
                                                    - หน้าเว็บของด่านนี้จะแทบไม่มีอะไรเลย แต่เมื่อสังเกตดีๆ จะเห็นว่ามี Cookie ชื่อว่า user อยู่ มีค่าเป็น UmFscGg6Z3Vlc3Q= ซึ่งหากดูจาก format แล้วน่าจะเป็น Base64 encoding เมื่อ decode ออกมาจะได้ Ralph:guest จากข้อความหน้าเว็บก็จะเดาได้ว่าต้องเป็น role admin ถึงจะเข้าถึงหน้านี้ได้ โดยให้เปลี่ยนจาก guest > admin ดังนี้ Ralph:guest > Ralph:admin แล้วนำไป Base64 encoding และ set Cookie user เมื่อเข้าหน้าเว็บด้วย Cookie ใหม่ก็จะพบกับ flag
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - สาเหตุของช่องโหว่ในข้อนี้เกิดจากการที่ web server เชื่อ cookie มากเกินไป ทำให้ role ถูกแก้ไขมาจากการ set-cookie ฝั่ง client ได้ โดยทั่วไปแล้ว วิธีแก้ก็คือ web server จะทำการ set-cookie เพียง session ID ที่ผูกไว้กับ user นั้น ๆ และจะ ดึงข้อมูลต่าง ๆ ของ user คนนั้น รวมถึง role ออกมาได้
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