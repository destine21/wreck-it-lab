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
                        <p>ท่านได้รับ Code Item สุดเทพมาจากงานเกมประจำปี ท่านจึงรีบเข้าเว็บไซต์ของเกม เพื่อทำการ Redeem Code Item นั้น หลังจาก Redeem เสร็จท่านได้สังเกตเห็นว่ามี Error แปลก ๆ ออกมาจากเว็บเมื่อเราใส่ Code Item ผิดรูปแบบลงไป เหมือนจะมีช่องโหว่! และผู้ให้บริการเกมนี้ก็มีรางวัลเป็น Item ในเกมให้กับผู้ที่พบช่องโหว่แล้วรายงานให้เขาอีกด้วย รู้ดังนี้แล้วสายเลือด Pentester ได้ปะทุขึ้น พร้อมลุยเพื่อของรางวัล</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ยึดเครื่องเซิร์ฟเวอร์ แล้วอ่าน flag ออกมาจากระบบ</p>
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
                        <h5>Related resource(s)</h5>
                        <ul class="resource"> 
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Top_10-2017_A8-Insecure_Deserialization">Insecure Deserialization</a></li>
                            <li><a target="_blank" href="https://www.notsosecure.com/remote-code-execution-via-php-unserialize/">Remote code execution via PHP</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->