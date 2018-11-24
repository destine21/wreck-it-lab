<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../assets/plugins/bootstrap/css/bootstrap.min.css">

    <title>Fakebook</title>
</head>

<body>
    <div class="text-center">
        <h1>fakebook</h1>
        <div class="post-form">
            <form action="post.php" method="POST">
                <textarea name="content" id="" cols="50" rows="5"></textarea>
                <br>
                <button class="btn btn-primary">Post</button>
                <!-- INSERT INTO `posts` (`id`, `content`, `author`, `time`) VALUES (NULL, 'test by admin', 'admin', CURRENT_TIMESTAMP) -->
            </form>
        </div>
    </div>

    <div class="wall text-center">
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

        $sql = "SELECT * FROM `posts`";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="post container w-50 my-3 border">
                <h2>' . $row["author"]. "</h2>
                <p>" . $row["content"]. "</p>
                <small>". $row["time"]. "</small>
                </div>";
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
</body>

</html>