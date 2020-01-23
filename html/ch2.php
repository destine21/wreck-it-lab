<?php $page = 'ch2'; ?>
<?php
        if (isset($_POST['en_pass'])) {
            $flag = $_POST['en_pass'];
            if ($flag == "flag{It's_a_0pen_Redir3ct}") {
                $isPass = true;
                $ch = 2;
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
                        <h1>Open Redirect&nbsp;<span>(15 points)</span></h1>
                        <h4>E-Business Card</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>วันหนึ่งท่านได้มีโอกาสพบเจอกับประธานบริษัท Amazing บริษัทยักษ์ใหญ่ที่เปิดเว็บไซต์ขายของออนไลน์ ระหว่างคุยกันนั้นประธานบริษัทรู้สึกถูกใจในตัวท่านมาก หลังคุยเสร็จท่านเองก็สนใจอยากจะลองสมัครงานที่บริษัทแห่งนี้ในตำแหน่ง Web Developer ดู ท่านเลยขอนามบัตรของประธานบริษัทมาเพื่อหวังจะใช้เส้นสายในการฝากตัวเข้าทำงาน แต่ทว่านามบัตรของประธานบริษัทหมดพอดี 
                        ท่านเลยได้นามบัตรออนไลน์มาแทน ด้วยจิตวิญญาณแห่งการเป็น Web Developer ขั้นเทพของท่าน ท่านสัมผัสได้ว่านามบัตรออนไลน์นี้มีช่องโหว่อยู่ </p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ทำให้หน้าเว็บไซต์นี้มุ่งไปที่ https://www.evil.c0m ให้ได้เพื่อทดสอบว่ามีช่องโหว่อยู่จริงตามที่ท่านสัมผัสได้รึเปล่า</p>
                        <a href="ch2/contact.php" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Unvalidated_Redirects_and_Forwards_Cheat_Sheet">Unvalidated Redirects and Forwards Cheat Sheet</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->