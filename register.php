<?php
session_start();
if (!isset($_SESSION['username'])) {

?>
    <!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <title>register</title>
        <style>
            button {
                margin-left: 25%;
            }

            table {
                margin-left: 30%;
            }

            th {
                text-align: left;
                background-color: #6CD2FE;
            }

            .logo {
                text-align: center;
            }
        </style>
    </head>

    <body>
        <?php




        ?>
        <div class="container">
            <h1 align="center">welcome To ECT</h1>
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li>
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="login.php"><span class="glyphicon glyphicon-edit"></span> เข้าสู่ระบบ</a>
                    </li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                </ul>
            </nav>
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div align="center">
                        <div class="panel panel-primary" style="width:100%;" align="center">
                            <div class="panel-heading" align="left">สมัครสมาชิก</div>
                            <div class="panel-body">
                                <div align="left">

                                    <form action="register_save.php" method="post" class="form-horizotal">
                                    <div class="input-group from-group">
                                                email : <input width="100px" type="email" class="from-group" name="email">
                                        </div>
                                        <br>
                                        <div class="input-group from-group">
                                            username: <input width="100%" type="text" class="from-group" name="login">
                                        </div>
                                        <br>
                                        <div class="input-group from-group">
                                           password: <input type="password" class="from-group" name="pwd">
                                        </div>
                                        <br>
                                        <div class="input-group from-group">
                                            confirmpassword: <input type="password" class="from-group" name="pwd1">
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
                                        <button type="submit" class="btn btn-primary glyphicon glyphicon-floppy-disk">สมัครสมาชิก</button>
                                    </div>
                                </center>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div style="text-align: center;"><a href="index.php">กลับไปยังหน้าหลัก</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        </div>
    </body>

    </html>
<?php
} else {
    header("refresh:0,url = index.php");
}
?>