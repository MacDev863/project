<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Post</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project_wood";
    // connect to database
    $conn = new PDO("mysql:host=$servername; dbname=$database", $username, $password);

    // prevent unreadable characters in many languages
    $conn->exec("SET CHARACTER SET utf8");
    // get data
    $result = $conn->query("SELECT email FROM user");
    $result1 = $conn->query("SELECT username FROM user");
    $result2 = $conn->query("SELECT role FROM user");
    // display it

    ?>
    <div class="container">
        <h1 align="center">Welcome To ECT</h1>
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li>
                    <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                </li>
            </ul>

        </nav>

        <center>
            <div class="container">
                <div class="row">
                    <div class="col-md-3"><?php echo 'Email '; ?></div>
                    <div class="col-md-3"> <?php
                                            echo  "Name"; ?>
                    </div>
                    <div class="col-md-3"> <?php echo  "role";
                                            ?></div>
                </div>
                <div class="row">
                    <div class="col-md-3"><?php foreach ($result as $row) {
                                                echo $row['email'] . '<BR>';
                                            }  ?></div>
                    <div class="col-md-3"> <?php foreach ($result1 as $row) {
                                                echo $row['username'] . '<BR>';
                                            }   ?> </div>
                    <div class="col-md-3"> <?php foreach ($result2 as $row) {
                                                echo $row['role'] . '<BR>';
                                            }  ?></div>
                </div>
            </div>

        </center>
    </div>
    <br>

    <div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>

</body>

</html>