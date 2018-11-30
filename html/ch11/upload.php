<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">
    <title>Image Storage</title>

    <style>
        body{
            background: url("images/bg.jpg");
            background-size: cover;
            font-family: "Comic Sans MS", cursive, sans-serif;
        }
        .content{
            background: rgba(241, 244, 251, 0.66);
        }
    </style>

</head>

<body>
    <div class="content text-center w-75 m-auto">
        <h1 class="m-3">Image Storage</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi dicta repudiandae autem necessitatibus,
            iure non fugiat! Expedita ipsa, magnam quia incidunt hic non delectus veritatis eos eum accusantium
            temporibus optio!</p>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" accept="image/*">
            <input type="submit" value="Upload Image" name="submit">
        </form>
        <h6 style="color:red;"><i>*filename should not be longer than 40 characters</i></h6>
        <br>
        <div class="">
        <?php
        if(!isset($_FILES["fileToUpload"]))die;
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], substr($target_file, 0, 8+40))) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                echo "<a href=".$target_file."> Here!</a>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        ?>
        </div>
    </div>
</body>

</html>