<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>อัพเดทข้อมูล</title>
    <?php
		session_start();
		if(!isset($_SESSION['id'])){
            header("Location: index.php");
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
        
		}
	?>
</head>
<body>
    <div class="container">
        <h1 align="center">welcome To ECT</h1>
        <nav class="navbar navbar-default">
            <ul class="nav navbar-nav">
                <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li>
                    <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                </li>
            </ul>
        </nav>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <div align="center">
                <div class="panel panel-primary" style="width:100%;" align="center">
                    <div class="panel-heading" align="left">ผู้ใช้ : <?php echo $_SESSION['username']; ?></div>
                    <div class="panel-body">
                        <div align="left">

                            <form action="insertrole.php" method="post" class="form-horizotal">
                                <div class="input-group from-group">
                                    ตำแหน่ง : <select name="role">
                                        <option value="all">--ทั้งหมด--</option>
                                        <option value="a">admin</option>
                                        <option value="m">member</option>
                                       
                                    </select>
                                </div>
                                <br>
                                <div class="input-group from-group">
                                   อีเมล์ : <input type="email" name="email">
                                </div>
                        </div>
                        <center>
                            <div class="input-group from-group">
                                <br>
                                <button type="submit"
                                    class="btn btn-primary glyphicon glyphicon-floppy-disk">บันทึกข้อมูล</button>
                            </div>
                        </center>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>