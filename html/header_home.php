<?php require_once('header.php') ?>

    <header>
        <div class="mainHead">
            <!-- <img src="" alt=""> -->
            <h1>Wreck-it Lab</h1>
        </div>
        <div class="nav-banner d-flex">
            <ul>
                <a href="#"><li>Home</li></a>
                <a href="resetDatabase.php"><li>Reset Database</li></a>
                <a href="#"><li>About</li></a>
                <li><?php require_once('sum_score.php') ?></li>
            </ul>
        </div>
    </header>
    <div class="d-flex">
        <div class="sidebar-banner d-block">
            <ul>
                <a href="ch1.php"><li>Client-side Authentication </li></a>
                <a href="ch2.php"><li>Open Redirect </li></a>
                <a href="ch3.php"><li>HTTP POST Request </li></a>
                <a href="ch4.php"><li>Insecure Direct Object Reference </li></a>
                <a href="ch5.php"><li>Privilege Escalation</li></a>
                <a href="ch6.php"><li>Directory Listing </li></a>
                <a href="ch7.php"><li>Weak Cryptography </li></a>
                <a href="ch8.php"><li>Local File Inclusion </li></a>
                <a href="ch9.php"><li>SQL Injection </li></a>
                <a href="ch10.php"><li>Cross Site Scripting (XSS) </li></a>
                <a href="ch11.php"><li>Insecure File Upload </li></a>
                <a href="ch12.php"><li>OS Command Injection </li></a>
                <a href="ch13.php"><li>Insecure Deserialization </li></a>
            </ul>
        </div>

