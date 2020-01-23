<?php $page = 'ch1'; ?>
<?php
        if (isset($_POST['en_pass'])) {
            $flag = $_POST['en_pass'];
            if ($flag == 'flag{Javascr1pt_is_s0_s3cure}') {
                $isPass = true;
                $ch = 1;
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
                        <h1>Client-side Authentication&nbsp;<span>(10 points)</span></h1>
                        <h4>Login page with JS</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>เพื่อนของท่านที่เป็น tester อยู่ที่บริษัทแห่งหนึ่งเเละในตอนนี้กำลังทดสอบระบบเพื่อค้นหา bug ต่าง ๆ อยู่แต่ทว่า Developer ลืมให้ id และ password มา เบอร์ติดต่อก็ไม่มี โชคยังดีที่เพื่อนของท่านเคยได้ยินพวก Developer คุยกันตอนออกไปพักกลางวันว่าระบบล็อคอินมีช่องโหว่อยู่แต่ไม่ทันได้แก้ไขก็ต้องส่งให้พวก tester มาทดสอบระบบก่อน จึงเป็นหน้าที่ของท่านที่ต้องช่วยเหลือเพื่อน tester คนนี้</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ทำการค้นหา id เเละ password ที่ซ่อนอยู่เเละล็อคอินเข้าสู่ระบบให้ได้</p>
                        <a href="ch1/login1.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                        <h5>Related resource(s)</h5>
                        <ul class="resource"> 
                            <li><a target="_blank" href="https://www.w3schools.com/js/js_whereto.asp">JavaScript Where To</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->