<?php $page = 'ch9';?>
<?php
        if(isset($_POST["en_pass"])){
        $flag = $_POST["en_pass"];
            if($flag == "flag{SQL_1s_4w3som3}"){
                $isPass = true;
                $ch = 9;
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
                        <h1>SQL Injection&nbsp;<span>(100 points)</span></h1>
                        <h4>Email - Sign in</h4>
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
                        <a href="ch9/login.php" target="blank" class="btn btn-primary" role="button">Start the Lab</a>            
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
                            <li><a target="_blank" href="https://www.owasp.org/index.php/SQL_Injection">SQL Injection</a></li>
                            <li><a target="_blank" href="https://www.owasp.org/index.php/Top_10_2013-A1-Injection">Top 10 2013-A1-Injection</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                - Try quote (')
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
                                                    - หน้านี้เป็นหน้า login ที่มีการเชื่อมต่อกับฐานข้อมูล จึงทำการทดสอบด้วยการใส่ single qoute ' ไปใน input จะพบว่ามี error mysql เกิดขึ้น เมื่อทำการศึกษาต่อไป จะพบว่าเราสามารถ bypass authentication ได้ด้วยการใส่ ' or '1' = '1 หรือ ' or 1=1 -- - และเมื่อล็อคอินผ่านก็จะพบกับ flag ของข้อนี้
                                                    <h5 class="mt-3 mb-2">Recommendation</h5>
                                                    - ช่องโหว่ร้ายแรง SQL Injection เกิดขึ้นเพราะขาดการทำ input validation วิธีแก้มีหลากหลายแบบตาม OWASP ยกตัวอย่างเช่นการใช้ Use of Prepared Statements (with Parameterized Queries) โดยภาษา PHP ก็จะใช้ PDO with strongly typed parameterized queries โดยการใช้ bind_param() ดังตัวอย่างต่อไปนี้<br>
                                                    <br>
                                                    // prepare and bind<br>
                                                    $stmt = $conn->prepare("INSERT INTO MyGuests (firstname, lastname, email) VALUES (?, ?, ?)");<br>
                                                    $stmt->bind_param("sss", $firstname, $lastname, $email);<br>
                                                    $stmt->execute();<br>
                                                    <br>
                                                    เพื่อป้องกันการเกิด SQL injection<br>
                                                    ref:<br>
                                                    <a href="https://www.owasp.org/index.php/SQL_Injection_Prevention_Cheat_Sheet">SQL Injection Prevention Cheat Sheet</a><br>
                                                    <a href="https://www.w3schools.com/php/php_mysql_prepared_statements.asp">PHP Prepared Statements</a><br>

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