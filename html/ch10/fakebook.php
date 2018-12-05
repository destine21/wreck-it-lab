<?php require_once('../header_ch.php') ?>
<link rel="stylesheet" href="../assets/fontAwesome/css/all.css">
<div class="navbar">
    <div class="container">
        <div class="w-50">
            <ul class="logo-side">
                <li class="logo mr-2"><i class="fab fa-facebook"></i>akebook</li>
                <li class="position-relative mx-2 w-100">
                    <div><input type="text" name="search_face" id="" placeholder="Search"><button><i class="fas fa-search"></i></button></div>
                </li>
            </ul>
        </div>
        <div>
            <ul class="profile-side">
                <li class="profile-g pl-0">
                    <div class="profile-img"><img src="images/Incognito_logo.png" alt="">&nbsp;&nbsp;Dummyboy</div>
                </li>
                <li class="border-right border-left profile-g">Home</li>
                <li class="noti-g"><i class="fas fa-bell"></i></li>
                <li class="noti-g border-left"><i class="fas fa-caret-down"></i></li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row mt-2">
        <div class="left-side col-2 pr-0">
            <div class="profile-head profile-img"><img src="images/Incognito_logo.png" alt="" class="rounded-circle">Dummyboy</div>
            <table>
                <tr>
                    <td><i class="fas fa-newspaper"></i></td>
                    <td>News Feed</td>
                </tr>
                <tr>
                    <td><i class="fab fa-facebook-messenger"></i></td>
                    <td>Messenger</td>
                </tr>
                <tr>
                    <td><i class="fas fa-users"></i></td>
                    <td>Groups</td>
                </tr>
                <tr>
                    <td><i class="fas fa-flag"></i></td>
                    <td>Pages</td>
                </tr>
                <tr>
                    <td><i class="fas fa-calendar-alt"></i></td>
                    <td>Events</td>
                </tr>
            </table>
        </div>
        <div class="middle-side col-6 pr-0">
            <div class="post-box">
                <div class="post-head">
                    <ul>
                        <li class="border-right active"><i class="fas fa-pencil-alt"></i>&nbsp;&nbsp;Compose Post</li>
                        <li class="border-right"><i class="fas fa-images"></i>&nbsp;&nbsp;Photo/Video Album</li>
                        <li><i class="fas fa-video"></i>&nbsp;&nbsp;Live Video</li>
                    </ul>
                </div>
                <div class="post-form">
                    <form action="post.php" method="POST">
                        <div class="profile-post profile-img"><img src="images/Incognito_logo.png" alt="" class="rounded-circle"></div>
                        <textarea name="content" id="" cols="50" rows="2" class="w-100" placeholder="What's on your mind, Dummyboy?"></textarea>
                        <div class="post-button d-flex justify-content-between">
                            <ul class="d-flex">
                                <li class="mr-2"><i class="fas fa-user-tag"></i>&nbsp;&nbsp;Tag Friends</li>
                                <li><i class="fas fa-laugh"></i>&nbsp;&nbsp;Feeling</li>
                            </ul>
                            <button class="btn">Post</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="wall">
                <?php
                $servername = "localhost:3306";
                $username = "root";
                $password = "";
                $dbname = "fakebook";
        
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                } 
        
                $sql = "SELECT * FROM `posts` ORDER BY time DESC";
                $result = $conn->query($sql);
        
                if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                        ?>
                        <div class="post container my-2">
                            <div class="header-post d-flex">
                                <div class="profile-post profile-img"><img src="images/Incognito_logo.png" alt="" class="rounded-circle position-relative"></div><!-- profile -->
                                <div class="name-time">
                                    <h6><?php echo $row["author"]?></h6>
                                    <p><?php echo $row["time"]?></p>
                                </div>
                            </div>
                            <div class="content-post">
                                <h3><?php echo $row["content"]?></h3>
                            </div>
                            <div class="comment d-flex justify-content-between">
                                <div class="w-100 text-center py-1 mt-1"><i class="far fa-thumbs-up"></i>&nbsp;&nbsp;Like</div>
                                <div class="w-100 text-center py-1 mt-1"><i class="far fa-comment-alt"></i>&nbsp;&nbsp;Comment</div>
                                <div class="w-100 text-center py-1 mt-1"><i class="far fa-share-square"></i>&nbsp;&nbsp;Share</div>
                            </div>
                        </div> <!-- class post -->
                        <?php 
                    }
                } else {
                    echo "0 results";
                }
                $conn->close();
            ?>

                <!-- <div class="post container w-50 my-3 border">
                    <h2>Tester</h2>
                    <p>Lorem </p>
                    <small>times</small>
                </div> -->
            </div>
        </div>
        <div class="right-side col">
            <div class="stories-box">
                <h5>Stories</h5>
                <div class="stories header-post d-flex my-2">
                    <div class="add-story"><i class="fas fa-plus"></i></div><!-- profile -->
                    <div class="name-time align-self-center ml-2 pl-1">
                        <h6>Add to your story</h6>
                        <p class="m-0">Share a photo or video</p>
                    </div>
                </div>
                <div class="stories header-post d-flex my-2">
                    <div class="profile-story profile-img"><img src="images/Incognito_logo.png" alt="" class="rounded-circle position-relative"></div>
                    <div class="name-time align-self-center ml-2 pl-1">
                        <h6>Dummyboy</h6>
                        <p class="m-0">30 mins</p>
                    </div>
                </div>
                <div class="stories header-post d-flex my-2">
                    <div class="profile-story profile-img"><img src="images/Incognito_logo.png" alt="" class="rounded-circle position-relative"></div>
                    <div class="name-time align-self-center ml-2 pl-1">
                        <h6>Dummyboy</h6>
                        <p class="m-0">1 hour</p>
                    </div>
                </div>
                <div class="load-more mx-1"><i class="fas fa-caret-down mr-2"></i>See more</div>
            </div>
        </div>
    </div>


</div>
</body>

</html>