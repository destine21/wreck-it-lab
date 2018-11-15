<?php require_once('header.php') ?>
<?php require_once('header_home.php') ?>

    <div class="container content-wrapper">
        <div class="content-banner">
            <div class="header-score">
                <div>
                    <h1>HTTP Headers &nbsp;<span>(15 points)</span></h1>
                    <h4>HTTP response give informations</h4>
                </div>
            </div>
            <div class="detail-cha mt-5">
                <div>
                    <h5>Statement</h5>
                    <p>Get an administrator access to the webpage.</p>
                    <a href="#" class="btn btn-primary" role="button">Start the challenge</a>            
                </div>
                <div>
                    <h5>Validation</h5>
                    <form action="">
                        <label for="en_pass">Enter flag :</label>
                        <input type="text" name="en_pass">
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div>
                    <h5>2 related ressource(s)</h5>
                    <ul class="resource"> 
                        <li><a href="#">test1</a></li>
                        <li><a href="#">test2</a></li>
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
</div>  <!-- for nav-bar -->