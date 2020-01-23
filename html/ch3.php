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
                        <h5>Related resource(s)</h5>
                        <ul class="resource"> 
                            <li><a target="_blank" href="https://en.wikipedia.org/wiki/POST_(HTTP)">POST (HTTP)</a></li>
                            <li><a target="_blank" href="https://www.w3schools.com/tags/ref_httpmethods.asp">HTTP Request Methods</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->