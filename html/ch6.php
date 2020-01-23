<?php $page = 'ch6'; ?>
<?php
        if (isset($_POST['en_pass'])) {
            $flag = $_POST['en_pass'];
            if ($flag == 'flag{Dil2ec7ory_L1s7ing}') {
                $isPass = true;
                $ch = 6;
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
                        <h1>Directory Listing&nbsp;<span>(30 points)</span></h1>
                        <h4>The Online Shopping Website</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>Developer ของบริษัท eboy ได้ลาออกไปอย่างกระทันหันซึ่ง Developer คนนี้มีชื่อเสียงมากในเรื่องของฝีมือแต่ทว่า
                        เขาก็ติดนิสัยชอบทิ้งไฟล์แปลกปลอมไว้ในไฟล์โปรเจคที่เขาทำตลอดเลย ซึ่งมีแต่เจ้าตัวเท่านั้นที่รู้ว่ามันอยู่ที่ไหนของไฟล์โปรเจค ตอนนี้เองที่ท่านถูกว่าจ้างโดยบริษัท eboy ให้ทำการค้นหาไฟล์แปลกปลอมนั้น โดยที่บริษัทไม่ยอมส่งไฟล์ใด ๆ ของโปรเจคให้เลย มีเพียงแต่หน้าเว็บ eboy เท่านั้น</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>ค้นหาไฟล์แปลกปลอมที่ซ่อนอยู่ให้ได้</p>
                        <a href="ch6/gallery.html" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.acunetix.com/blog/web-security-zone/directory-listing-information-disclosure/">Directory Listing and Information Disclosure</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->