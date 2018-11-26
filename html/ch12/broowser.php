<?php 
$url = "";
if(isset($_GET['url'])){
    $url = urldecode($_GET['url']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <title>Broowser | The Ultimate online browser on the internet</title>
</head>

<body>
    <div class="browser">
        <form action="" class="url-bar" method="GET">
            <input class="form-control w-75 d-inline-block" type="text" name="url" value="<?php echo $url;?>">
            <button type="submit" class="btn btn-primary">Go</button>
        </form>
        <div class="bookmark-bar">
            <ul>
                <li><a href="?url=https://www.facebook.com">Facebook</a></li>
                <li><a href="?url=https://www.sanook.com">Sanook</a></li>
                <li><a href="?url=https://github.com/">GitHub</a></li>
                <li><a href="?url=https://droidsans.com/">Droidsans</a></li>
            </ul>
        </div>
        <div class="browser-content">
            <?php system('curl '.$url);?>
        </div>
    </div>
</body>

</html>