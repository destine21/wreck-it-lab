<?php $page = 'ch3';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{Th1s_i5_H7TP_P0S7_R3que5t}"){
                $isPass = true;
                $ch = 3;
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
                        <h1>HTTP POST Request&nbsp;<span>(30 points)</span></h1>
                        <h4>King of Hammer</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>มีคำร่ำลือจากประชาชน เกี่ยวกับเกมในตำนานที่ไม่สามารถเอาชนะได้ เนื่องจากหัวหน้าของท่านก็หัวร้อนจากการพ่ายแพ้เกมที่ว่านี้มาเหมือนกัน ดังนั้นภารกิจของท่านจึงมีหน้าที่ไปตรวจสอบ และเอาชนะเกมที่ไม่มีใครเอาชนะได้!</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>เอาชนะเกมในตำนาน ที่ไม่มีใครเอาชนะได้</p>
                        <a href="ch3/score.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/POST_(HTTP)">POST (HTTP)</a></li>
                            <li><a target="_blank" href="https://www.w3schools.com/tags/ref_httpmethods.asp">HTTP Request Methods</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - ลองใช้ โปรแกรม Burp Suite Community Edition เพื่อดัก HTTP request ที่ถูกส่งออกไปดูสิ <a href="/how-to.php?tool=burpSuite">How to use Burp Suite</a>
                                </div>    
                            </li>
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Solution & Recommendation</h5>
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
                                                    - เมื่อดัก HTTP request ด้วย Burp จะเห็นว่ามี parameter score ถูกส่งออกไปใน body ของ request เมื่อทำการแก้ค่า parameter score ให้มากกว่า 100 แล้ว ส่งออกไป จะทำให้ได้ flag ของข้อนี้
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - สำหรับโจทย์ ข้อนี้ จะเป็นช่องโหว่ด้านการ Design, การใช้ HTTP Post reqeust นั้นถึงแม้ว่า parameter จะไม่แสดงใน URL แต่ก็ยังสามารถถูกแก้ไขได้แม้ว่าจะ hidden input ก็ตาม ดังนั้นหากมีการคำนวณ หรือ logic ต่าง ๆ ให้ทำที่ฝั่ง server เช่นในข้อนี้ มีการใช้ Math.random() ซึ่งเป็นการสุ่มคะแนนส่งไปจากฝั่ง client วิธีแก้ คือให้ทำการสุ่่มคะแนนทางฝั่ง server จะทำให้ไม่สามารถแก้ไขโกงค่าคะแนนได้
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