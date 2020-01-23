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
                        <p>เช้าวันหนึ่งมีชายร่างสูงสูบไปป์ ชายคนนั้นอ้างตัวว่าเป็นนักสืบชื่อดังแห่งถนนเบอร์เกอร์สตรีท เขาเข้ามาพบท่านแล้วเล่าถึง ข่าวการโจรกรรมอาวุธระเบิดนิวเคลียร์ และ ฆาตกรรมนักวิจัยโดยผู้ก่อการร้าย ณ ประเทศห่างไกล ก่อนที่นักวิจัยคนนั้นจะสิ้นลมเขาได้ทิ้งข้อความบางอย่างเอาไว้ พร้อมบอกว่าเป็นรหัสที่จะหยุดอาวุธนิวเคลียร์ได้ นักสืบคนนั้นยื่นเบาะแสให้สองอย่าง หนึ่งคือกระดาษที่จดรหัสลับอะไรสักอย่าง และ สองคือตัวเข้ารหัสลับนี้ พร้อมกับขอร้องให้ท่านช่วยถอดรหัสลับนี้ให้เขา ก่อนที่ผู้ก่อการร้ายจะถอดรหัสนี้ได้</p><p>รหัสลับ : <span class="highlight">c3ludHtSYVB5MmxjZ18xZl80anJmMHozfQ==</span> </p>
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
                        <h5>Related resource(s)</h5>
                        <ul class="resource"> 
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/Caesar_cipher">Caesar cipher</a></li>
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/Base64">Base64</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->