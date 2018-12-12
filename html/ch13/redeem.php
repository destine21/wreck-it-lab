<?php
    include 'item.php';
    if (isset($_GET['code'])) {
        $code = urldecode(base64_decode($_GET['code']));
        unserialize($code);
    }
?>
<?php require_once '../header_ch.php'; ?>
<link rel="stylesheet" href="../assets/fontAwesome/css/all.css">
<title>Redeem Item</title>

<form action="" method="GET">
    <div class="card my-5">
        <div class="card-header container py-2">
            <div class="row">
                <div class="col align-self-center">
                    <div class="icon d-flex">
                        <div class="red btn-circle"><i class="fas fa-times"></i></div>
                        <div class="yellow btn-circle"><i class="fas fa-minus"></i></div>
                        <div class="green btn-circle"><i class="fas fa-sort"></i></div>
                    </div>
                </div>
                <div class="col-8">
                    <h6 class="m-0 align-self-center">Product Avtivation</h6>
                </div>
            </div>
        </div>
        <div class="card-body">
            <p class="card-text">Please enter the product code you wish to add to your inventory</p>
            <p class="card-text mt-5 mb-1">Product Code</p>
            <div class="redeem">
                <input type="text" name="code" class="form-control w-100">
            </div>
            <p class="card-text mt-2 mb-1">Example code: </p>
            <p class="card-text small">Tzo0OiJJdGVtIjo0OntzOjI6ImlkIjtzOjQ6IkkwMDMiO3M6NDoibmFtZSI7czoxMjoiTHVuYXRpYyBDYXJkIjtzOjExOiJkZXNjcmlwdGlvbiI7czo0NToiTFVLICsgMSwgQ3JpdGljYWwgUmF0ZSArIDEsIFBlcmZlY3QgRG9kZ2UgKyAxIjtzOjU6InByaWNlIjtpOjEwO30=</p>
            <p class="card-text mt-4 mb-0">Redeemed Item</p>
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