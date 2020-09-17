<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>เพิ่มข้อมูลไม้</title>
    <?php
		session_start();
		if(!isset($_SESSION['id'])){
			header("Location: index.php");
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

                            <form action="wood.php" method="post" class="form-horizotal">
                                <div class="input-group from-group">
                                    ความกว้าง : <select name="widht">
                                        <option value="all">--ทั้งหมด--</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                <br>
                                <div class="input-group from-group">
                                    ความยาว : <input type="number" name="lenght">
                                </div>
                                <br>
                                <div class="input-group from-group">
                                    ราคาไม้: <select name="price">
                                        <option value="all">--ทั้งหมด--</option>
                                        <option value="370">370</option>
                                        <option value="270">270</option>
                                        <option value="80">80</option>
                                    </select>
                                </div>
                                <br>
                                <div class="input-group from-group">
                                    น้ำหนัก : <input type="number" name="weight">
                                </div>
                                <br>
                                <div class="input-group from-group">
                                    เกรดไม้ : <select name="category">
                                        <option value="all">--ทั้งหมด--</option>
                                        <option value="AB">AB</option>
                                        <option value="C">C</option>
                                        <option value="P">P</option>
                                    </select>
                                </div>
                                <br>
                                <br>
                                <div class="input-group from-group">




                                </div>
                                <br>


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