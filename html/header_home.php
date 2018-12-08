<?php
	global $page;
?>

<?php require_once('header.php') ?>
<?php require_once('database/checker.php');?>
<link rel="stylesheet" href="assets/fontAwesome/css/all.css">
    <header>
        <div class="mainHead">
            <!-- <img src="" alt=""> -->
            <h1 class="f-bit">Wreck-it Lab</h1>
        </div>
        <div class="nav-banner px-5 justify-content-between d-flex">
            <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="#"><li>Tools</li></a>
                <a href="database/newGame.php" onclick="return confirm('Are you sure you want to restart the new game ?')"><li>New Game</li></a>
                <a href="database/resetDatabase.php" onclick="return confirm('Are you sure you want to reset the database ?')"><li>Reset Database</li></a>
            </ul>
            <div class="point"><strong><?php require_once('database/sumScore.php') ?></strong> points</div>
        </div>
    </header>
    <div class="d-flex">
        <div class="sidebar-banner d-block">
            <ul>
                <a href="ch1.php"><li class="<?php echo(($page=='ch1')?'active':'')?>">Client-side Authentication <i class="fas fa-check check_color check1"></i> </li></a> 
                <a href="ch2.php"><li class="<?php echo(($page=='ch2')?'active':'')?>">Open Redirect <i class="fas fa-check check_color check2"></i></li></a> 
                <a href="ch3.php"><li class="<?php echo(($page=='ch3')?'active':'')?>">HTTP POST Request <i class="fas fa-check check_color check3"></i></li></a>
                <a href="ch4.php"><li class="<?php echo(($page=='ch4')?'active':'')?>">Insecure Direct Object Reference <i class="fas fa-check check_color check4"></i></li></a>
                <a href="ch5.php"><li class="<?php echo(($page=='ch5')?'active':'')?>">Privilege Escalation <i class="fas fa-check check_color check5"></i></li></a>
                <a href="ch6.php"><li class="<?php echo(($page=='ch6')?'active':'')?>">Directory Listing <i class="fas fa-check check_color check6"></i></li></a>
                <a href="ch7.php"><li class="<?php echo(($page=='ch7')?'active':'')?>">Weak Cryptography <i class="fas fa-check check_color check7"></i></li></a>
                <a href="ch8.php"><li class="<?php echo(($page=='ch8')?'active':'')?>">Local File Inclusion <i class="fas fa-check check_color check8"></i></li></a>
                <a href="ch9.php"><li class="<?php echo(($page=='ch9')?'active':'')?>">SQL Injection <i class="fas fa-check check_color check9"></i></li></a>
                <a href="ch10.php"><li class="<?php echo(($page=='ch10')?'active':'')?>">Cross Site Scripting (XSS) <i  class="fas fa-check check_color check10"></i></li></a>
                <a href="ch11.php"><li class="<?php echo(($page=='ch11')?'active':'')?>">Insecure File Upload <i  class="fas fa-check check_color check11"></i></li></a>
                <a href="ch12.php"><li class="<?php echo(($page=='ch12')?'active':'')?>">OS Command Injection <i  class="fas fa-check check_color check12"></i></li></a>
                <a href="ch13.php"><li class="<?php echo(($page=='ch13')?'active':'')?>">Insecure Deserialization <i  class="fas fa-check check_color check13"></i></li></a>
            </ul>
        </div>

