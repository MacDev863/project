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
	<?php
	$serverName='localhost';
	$userName='root';
	$userPassword='';
	$dbName='project_wood';

	$conn=new mysqli($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn,"utf8");
	$query=$conn->query("SELECT * FROM product");
	$result=$query->fetch_assoc();
	

?>
	</center>
	</div>
	<br>

	<div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>

</body>
</html>