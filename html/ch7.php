<?php $page = 'ch7';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{EnCl2ypt_1s_4wes0m3}"){
                $isPass = true;
                $ch = 7;
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
                        <h1>Weak Cryptography&nbsp;<span>(50 points)</span></h1>
                        <h4>Super Duper Encryptor</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>เช้าวันหนึ่งมีชายร่างสูงสูบไปป์ ชายคนนั้นอ้างตัวว่าเป็นนักสืบชื่อดังแห่งถนนเบอร์เกอร์สตรีท เขาเข้ามาพบท่านแล้วเล่าถึง ข่าวการโจรกรรมอาวุธระเบิดนิวเคลียร์ และ ฆาตกรรมนักวิจัยโดยผู้ก่อการร้าย ณ ประเทศห่างไกล ก่อนที่นักวิจัยคนนั้นจะสิ้นลมเขาได้ทิ้งข้อความบางอย่างเอาไว้ พร้อมบอกว่าเป็นรหัสที่จะหยุดอาวุธนิวเคลียร์ได้ นักสืบคนนั้นยื่นกระดาษที่จดรหัสลับอะไรสักอย่างให้ พร้อมกับขอร้องให้ท่านช่วยถอดรหัสลับนี้ให้เขา ก่อนที่ผู้ก่อการร้ายจะถอดรหัสนี้ได้</p><p>รหัสลับ : <span class="highlight">c3ludHtSYVB5MmxjZ18xZl80anJmMHozfQ==</span> </p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ช่วยนักสืบถอดรหัสลับอาวุธนิวเคลียร์ก่อนที่จะสายเกินไป</p>
                        <a href="ch7/encrypt.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/Caesar_cipher">Caesar cipher</a></li>
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/Base64">Base64</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - substitution cipher
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
                                                    - จากโจทย์ จะให้ c3ludHtSYVB5MmxjZ18xZl80anJmMHozfQ== มาเมื่อนำไป Base64 decode จะได้ synt{RaPy2lcg_1f_4jrf0z3} ซึ่งลักษณะคล้าย flag แต่ถูก encrypt ด้วย simple substitution ciphers ที่เรียกว่า Rot13 เป็นการ shift ตัวอักษรภาษาไป 13 ตัว เมื่อทำการ Base64 decode และ Rot13 ตามลำดับก็จะได้ flag ที่ซ่อนอยู่ออกมา
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - การเข้ารหัส (Encryption) ที่แข็งแรงจะต้องใช้ Algorithm ที่เป็นที่ยอมรับ เช่น AES, RSA เป็นต้น ทั้งยังจำเป็นที่จะต้องใช้ key ที่มีความยาวที่ไม่น้อยเกินไปอีกด้วย แต่การเข้ารหัสในข้อนี้ เป็นการใช้ ROT13 ซึ่งไม่จำเป็นจะต้องมี key ทำให้ crack ออกมาได้ง่าย
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