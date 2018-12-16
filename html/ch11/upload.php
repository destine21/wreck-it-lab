<?php require_once('../header_ch.php'); ?>
<link rel="stylesheet" href="../assets/fontAwesome/css/all.css">
<title>Upload</title>
<div class="pt-3">
    <div class="upload-img text-center mx-auto p-4 my-5">
        <div><i class="fas fa-cloud-upload-alt"></i></div>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mt-2"><input type="file" name="fileToUpload" id="fileToUpload" class="border-0 w-50" accept="image/*"></div>
            <h6>*filename should not be longer than 40 characters</h6>
            <div class="mt-4 mb-2"><input type="submit" value="Upload Image" name="submit" class="w-50"></div>
        </form>
        <?php
        if(!isset($_FILES["fileToUpload"]))die;
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION)); ?>
        
        <div class="pt-2 mt-3 border-top break-word">
        <?php // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], substr($target_file, 0, 8+40))) {
                echo "The file <strong>". basename( $_FILES["fileToUpload"]["name"]). "</strong> has been uploaded.";
                echo "<a href=".substr($target_file, 0, 8+40)."> Here!</a>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        ?>
        </div>
    </div>
</div>
</body>

</html>