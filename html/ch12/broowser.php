<?php require_once('../header_ch.php'); ?>
<link rel="stylesheet" href="../assets/fontAwesome/css/all.css">
<?php 
$url = "";
if(isset($_GET['url'])){
    $url = urldecode($_GET['url']);
}
?>
<title>Broowser | The Ultimate online browser on the internet</title>

<body>
    <div class="browser">
        <div class="tab-bar d-flex pt-2">
            <div class="icon-bar d-flex">
                <div><i class="fas fa-times"></i></div>
                <div><i class="fas fa-minus"></i></div>
                <div><i class="fas fa-sort"></i></div>
            </div>
            <div class="tab-name justify-content-between d-flex">
                <div> New Tab</div><i class="fas fa-times align-self-center mr-1"></i>
            </div>
            <div class="add-tab mx-2">
                <i class="fas fa-plus"></i>
            </div>
        </div>
        <div class="url-bar mx-2 my-1 d-flex">
            <div class="d-flex">
                <div class="add-tab mr-1"><i class="fas fa-arrow-left"></i></div>
                <div class="add-tab mr-1"><i class="fas fa-arrow-right"></i></div>
                <div class="add-tab mr-1"><i class="fas fa-redo-alt"></i></div>
                <div class="add-tab mr-2"><i class="fas fa-home"></i></div>
            </div>
            <div class="w-100">
            <form action="" class="url-form" method="GET">
                <input class="w-100" type="text" name="url" value="<?php echo $url;?>" placeholder="Search Google or type a URL">
                <!-- <button type="submit" class="">Go</button> -->
            </form>
            </div>
            <div class="d-flex">
                <div class="add-tab ml-2 mr-1"><img src="images/Incognito_logo.png" alt=""></div>
                <div class="add-tab"><i class="fas fa-ellipsis-v"></i></div>
            </div>
        </div>
        <div class="bookmark-bar d-flex my-1 mx-2">
                <div class="mr-1"><a href="?url=https://www.facebook.com"><i class="fab fa-facebook mr-2"></i>Facebook</a></div>
                <div class="mr-1"><a href="?url=https://www.sanook.com"><i class="far fa-file mr-2"></i>Sanook</a></div>
                <div class="mr-1"><a href="?url=https://github.com/"><i class="fab fa-github mr-2"></i>GitHub</a></div>
                <div class="mr-2"><a href="?url=https://droidsans.com/"><i class="far fa-file mr-2"></i>Droidsans</a></div>
        </div>
        <div class="browser-content">
            <?php system('curl '.$url);?>
        </div>
    </div>
</body>

</html>