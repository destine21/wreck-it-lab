<?php
    include('item.php');
    if(isset($_GET['code'])){
        $code = urldecode(base64_decode($_GET['code']));
        unserialize($code);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <title>Item Code Redeem</title>
</head>
<body>
    <div>
        <h1>Redeem your item here</h1>
        <form action="" method="GET">
            <textarea class="form-control w-75" type="text" name="code" id=""></textarea>
            <button class="btn btn-primary" type="submit">Redeem</button>
        </form>
        <div class="">
            <p>Example code: Tzo0OiJJdGVtIjo0OntzOjI6ImlkIjtzOjQ6IkkwMDMiO3M6NDoibmFtZSI7czoxMjoiTHVuYXRpYyBDYXJkIjtzOjExOiJkZXNjcmlwdGlvbiI7czo0NToiTFVLICsgMSwgQ3JpdGljYWwgUmF0ZSArIDEsIFBlcmZlY3QgRG9kZ2UgKyAxIjtzOjU6InByaWNlIjtpOjEwO30=</p>
        </div>
    </div>
    <div>
        <h2>Redeemed Item</h2>
        <ul>
            <?php
                $path = './inventory';
                $files = scandir($path);
                $files = array_diff(scandir($path), array('.', '..'));
                foreach ($files as $file) {
                    echo '<li><a href="'.$path.'/'.$file.'">'.$file.'</a></li><br>';
                }
            ?>
        </ul>
    </div>
</body>
</html>