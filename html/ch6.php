<?php $page = 'ch6';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{Dil2ec7ory_L1s7ing}"){
                $isPass = true;
                $ch = 6;
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
                        <h1>Directory Listing&nbsp;<span>(30 points)</span></h1>
                        <h4>Login with Javascript</h4>
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
                        <a href="ch6/gallery.html" target="blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a href="https://www.acunetix.com/blog/web-security-zone/directory-listing-information-disclosure/">Directory Listing and Information Disclosure</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - Directory Listing คืออะไร?, รูปถูกเก็บอยู่ที่ไหน ?
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
                                                    - หน้าเว็บจะมีรูปมากมายแสดงอยู่ เมื่อเราดูที่ path ของรูปจะเห็นว่าอยู่ใน /images และ เมื่อทำความเข้าใจกับ Directory Listing ก็จะพบว่าสามารถเข้าหน้า /images ได้และจะพบไฟล์ทั้งหมดที่อยู่ด้านใน จะเห็นว่ามีไฟล์ fl4g.txt ที่เก็บค่า flag ของข้อนี้อยู่
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - ช่องโหว่นี้อยู่ในหมวด Security Misconfiguration ซึ่ง Directory Listing มักจะเปิดไว้ทำให้สามารถ ดูข้อมูลต่าง ๆ ภายใน Folder ที่อยู่บน web server ได้ วิธีแก้ไข จะต้องทำการ ปิด Listing ตามวิธีการที่แตกต่างไปในแต่ละ web server engine
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