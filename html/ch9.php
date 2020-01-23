<?php $page = 'ch9'; ?>
<?php
        if (isset($_POST['en_pass'])) {
            $flag = $_POST['en_pass'];
            if ($flag == 'flag{SQL_1s_4w3som3}') {
                $isPass = true;
                $ch = 9;
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
                        <h1>SQL Injection&nbsp;<span>(100 points)</span></h1>
                        <h4>Email - Sign in</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>เว็บไซต์สมัครรับแอดมิดชุ่ยของประเทศแห่งหนึ่งมีข่าวฉาวออกมาบ่อย ๆ ว่า มีผู้ใช้งานหลายรายถูกเข้าไปแก้คณะในระบบแอดมิดชุ่ย ทำให้เสียหายต่ออนาคตเป็นอย่างมาก
                        คนธรรมดาทั่วไปเชื่อว่าผู้ใช้งานอาจถูกเพื่อนแกล้ง เพราะผู้ใช้งานหลายรายที่ผ่านมาชอบเผลอบอกรหัสให้เพื่อนตนเองรู้ จึงเป็นเหตุให้โดนแฮค แต่ทว่าตัวท่านได้ยินชื่อเสียงของหน่วยงานที่จ้างทำเว็บไซต์นี้ขึ้นมาเป็นอย่างดี 
                        ท่านจึงไม่เชื่อว่าทั้งหมดเป็นความผิดพลาดของผู้ใช้เเละตัวการต้องเป็นหน้าล็อคอินแน่ ๆ</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>หาความผิดปกติของหน้าล็อคอินนี้ให้ได้</p>
                        <a href="ch9/login.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/SQL_Injection">SQL Injection</a></li>
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Top_10_2013-A1-Injection">Top 10 2013-A1-Injection</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->