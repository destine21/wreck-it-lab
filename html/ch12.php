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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum quisquam inventore, quaerat nisi ad pariatur distinctio doloribus ut, deserunt debitis, excepturi tempora dignissimos nemo a. Aliquid et eum esse sed?</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>Bypass login and access to the webpage.</p>
                        <a href="ch12/chroome.php?url=https%3A%2F%2Fwww.facebook.com" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Command_Injection">Command Injection</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - อะไรที่ทำให้สามารถรัน os command หลาย ๆ คำสั่งได้ในครั้งเดียว (ปล. ไม่เห็นไม่ได้แปลว่าไม่มีอยู่)
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
                                                    - หน้านี้จะมีการนำชื่อ URL ไปรันคำสั่ง curl ซึ่งหากนำไปต่อ string แล้วรัน command ก็จะเกิดช่องโหว่ขึ้น โดยสามารถใส่ ;, &, &&, | เป็นต้น แล้วตามด้วย os command ต่าง ๆ (ในที่นี้คือ Linux command) เช่น<br>
                                                    "https://www.facebook.com/;ls" ก็จะรัน command "ls" หรือ จะตัดให้เหลือแค่
                                                    ";ls" ก็จะรัน command "ls" เหมือนกัน<br>
                                                    คราวนี้ จะพบว่ามี folder flag อยู่เข้าไปก็จะต้อง ls -a ถึงจะเจอไฟล์ .flag.txt
                                                    ให้ cat flag/.flag.txt ออกมาก็จะพบกับ flag ของข้อนี้<br>
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - การใช้ คำสั่ง system() หรือ คำสั่งใด ๆ ที่สมารถรัน OS command สิ่งที่ต้องห้ามก็คือ การนำ user input มาเป็น argument ใน ฟังก์ชั่นโดยไม่ทำการ validate input เพราะว่าจะทำให้เกิดช่องโหว่ OS command injection ได้ วิธีแก้ไข คือ หลีกเลี่ยงการใช้ฟังก์ชันที่รัน OS command โดยตรง หรือถ้าเลี่ยงไม่ได้ ให้ทำการ Escape input หรือ ทำ input validation เพื่อที่จะป้องกัน การใส่คำสั่งแปลกปลอมเข้ามา
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