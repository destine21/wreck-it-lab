<?php $page = 'ch4';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{Ins3cul2eD1rect0bj3ct}"){
                $isPass = true;
                $ch = 4;
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
                        <h1>Insecure Direct Object Reference&nbsp;<span>(15 points)</span></h1>
                        <h4>Employee Card Collection</h4>
                    </div>
                </div>
                <div class="detail-cha mt-5">
                    <div class="description">
                        <h5>Description</h5>
                        <p>เพื่อนซี้ของท่านเล่าข่าวที่ว่า ในบริษัทที่เขาทำงานอยู่ มีข้อมูลพนักงานรั่วไหลและถูกนำไปขาย จึงมาไหว้วานให้ท่านช่วย ท่านซึ่งเป็นคนใจดีมักเข้าไปช่วยเหลือผู้คนที่เดือดร้อน จึงได้เข้าไปที่ บริษัทเพื่อตรวจสอบหาช่องโหว่ที่ทำให้ข้อมูลพนักงานหลุดออกไป</p>
                    </div>
                    <div>
                        <h5>Goal</h5>
                        <p>หาช่องโหว่และอ่านข้อมูลของ Admin ออกมา</p>
                        <a href="ch4/user.php?id=5" target="_blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Testing_for_Insecure_Direct_Object_References_(OTG-AUTHZ-004)">Testing for Insecure Direct Object References</a></li>
                        </ul>
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->