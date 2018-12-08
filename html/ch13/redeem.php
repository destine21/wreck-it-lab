<?php
    include 'item.php';
    if (isset($_GET['code'])) {
        $code = urldecode(base64_decode($_GET['code']));
        unserialize($code);
    }
?>
<?php require_once '../header_ch.php'; ?>
<style>
    h6{
        color: #dfe2de;
    }
    p{
        color:#a8a8a8;
    }
    body{
        background-image: url("img/rag.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
    
.fill-color{
    color:#a8a8a8;
}
a.fill-color:hover{
    color:#525252;
}
.card{
    width: 35%;
    height:600px;
    display: flex;
    justify-content: center;
    margin:auto;
    background-color:#1d2227;
}
.card-body{
    margin: 10px;
    margin-bottom: 0px;
    background-image: linear-gradient(#1d2126,#393939);
}
.card-header{
    padding: 0px;
    display: inline-block;
}

.btn-circle {
  width: 15px;
  height: 15px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border: 0px;
  border-radius: 15px;
}
.red{
    background-image: linear-gradient(#b30005,#ffa4a4);
    margin-left: 10px;
}

.yellow{
    background-image: linear-gradient(#cf5e1e,#fee255);
}

.green{
    background-image: linear-gradient(#5cac32,#ace05c);
}
.btn-redeem{
     background-color:#414141;
     color:#dfdfd6;
     border-radius:0px;
     box-shadow: 1px 1px #414141;
     float:right;
}
.btn-redeem:hover{
    background-color:#525252;
}
textarea{
    background-color:#27292c !important;
    border-radius: 0px !important;
    color:#dfe2de !important;
}
p.small{
    font-size: 8px;
}
</style>
<title>Redeem Item</title>
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