<?php require_once('header.php') ?>
<?php require_once('header_home.php') ?>

    <div class="bg-main">
        <div class="content-wrapper mx-0">
            <div class="content-banner">
                <div class="header-score">
                    <div>
                        <h1>Client-side Authentication&nbsp;<span>(15 points)</span></h1>
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
                        <a href="ch1/login1.php" target="blank" class="btn btn-primary" role="button">Start the Lab</a>            
                    </div>
                    <div>
                        <h5>Validation</h5>
                        <?php
                             if(isset($_POST["en_pass"])){
                               $flag = $_POST["en_pass"];
                                 if($flag == "flag{Javascr1pt_is_s0_s3cure}"){
                                      echo '<div class="alert alert-success">Well Done!</div>';
                                 }
                                 else echo'<div class="alert alert-danger">Nahh Try it again.</div>';
                             }
                        ?>
                        <form action="" method="POST">
                            <label for="en_pass">Enter flag :</label>
                            <input type="text" name="en_pass">
                            <button type="submit">Send</button>
                        </form>
                    </div>
                    <div>
                        <h5>2 related ressource(s)</h5>
                        <ul class="resource"> 
                            <li><a href="#">HTTP Header</a></li>
                            <li><a href="#">HTTP reqeust response</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="accordion" id="investAccordion">
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Hint</h5>
                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#investAccordion">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, vitae nemo. Repellat ipsam architecto, ut aliquam culpa eius reiciendis, molestias ipsum hic explicabo placeat quibusdam ratione ex autem delectus ea!
                                </div>    
                            </li>
                            <li>
                                <h5 class="invest-collapse collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Solution</h5>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#investAccordion">
                                    -
                                </div>    
                            </li>
                        </ul>                        
                    </div>
                </div>
            </div>    
        </div>
    </div>
</div>  <!-- for nav-bar -->