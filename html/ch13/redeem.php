<?php
    include 'item.php';
    if (isset($_GET['code'])) {
        $code = urldecode(base64_decode($_GET['code']));
        unserialize($code);
    }
?>
<?php require_once '../header_ch.php'; ?>

<title>Redeem Item</title>
<head>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <form action="" method="GET">
    <div class="card mt-5">
        <div class="card-header container">
        <div class="row">
        <div class="col">
            <button type="button" class="red btn btn-circle"></button>
            <button type="button" class="yellow btn btn-circle"></button>
            <button type="button" class="green btn btn-circle"></button>
        </div>
        <div class="col-8">
            <h6 class="mt-1">Product Avtivation</h6>
        </div>
        </div>
    </div>
    <div class="card-body">
        <p class="card-text">Please enter the product code you wish to add to your inventory</p>
        <p class="card-text mt-5">Product Code</p>
        <div class="redeem">
            <textarea class="form-control w-100" type="text" name="code" id=""></textarea>
        </div>
        <p class="card-text mt-3 mb-0">Example code: </p>
        <p class="card-text small">Tzo0OiJJdGVtIjo0OntzOjI6ImlkIjtzOjQ6IkkwMDMiO3M6NDoibmFtZSI7czoxMjoiTHVuYXRpYyBDYXJkIjtzOjExOiJkZXNjcmlwdGlvbiI7czo0NToiTFVLICsgMSwgQ3JpdGljYWwgUmF0ZSArIDEsIFBlcmZlY3QgRG9kZ2UgKyAxIjtzOjU6InByaWNlIjtpOjEwO30=</p>
        <p class="card-text mt-3 mb-0">Redeemed Item</p>
        <ul>
            <?php
                $path = './inventory';
                $files = scandir($path);
                $files = array_diff(scandir($path), array('.', '..'));
                foreach ($files as $file) {
                    echo '<li class="fill-color"><a class="fill-color" href="'.$path.'/'.$file.'">'.$file.'</a></li>';
                }
            ?>
        </ul>
    </div>
    <div>
        </div>
        <div class="card-footer text-muted">
            <button class="btn btn-redeem" type="submit">Redeem</button>
        </div>
    </div>
</form>
</body>