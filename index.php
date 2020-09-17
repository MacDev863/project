<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <title>Project</title>
</head>
<?php
if (!isset($_SESSION['id'])) {
?>

    <body>
        <div class="container">
            <h1 style="text-align: center;">Welcome To ECT</h1>
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

            <br>
            <div align="center">
                <a href="register.php"> <img align="center" src="img/logo_kmutnb-(6).png" alt="">

                    <h1 style="text-align: center;">ลงทะเบียน</h1>
                </a>
            </div>
        </div>
    </body>

<?php
} else {
?>

    <body>
        <div class="container">
            <h1 style="text-align: center;">Welcome To ECT</h1>
            <nav class="navbar navbar-default">
                <ul class="nav navbar-nav">
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li>
                        <a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a>
                    </li>
                    <?php
                    if ($_SESSION["role"] == "a") { ?>
                        <li>
                            <a href="user.php"><span class="glyphicon glyphicon-user"></span>user</a>

                        </li>
                        <li>
                            <a href="addrole.php"><span class="glyphicon glyphicon-user"></span>addrole</a>

                        </li>
                    <?php } ?>

                </ul>
                <?php

                if ($_SESSION["username"]) { ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span>&nbsp<?php echo $_SESSION["username"] . "&nbsp;"; ?><span class="glyphicon glyphicon-menu-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php"><span class="glyphicon glyphicon-off"></span>&nbsp&nbspออกจากระบบ</a>
                                </li>
                            </ul>
                        </li>
                        <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    </ul>
                <?php
                }
                ?>
            </nav>
            <div class="dropdown">
                <a class="btn btn-success" href="newpost.php" role="button" style="float: right;"><span class="glyphicon glyphicon-plus"></span>&nbsp&nbspเพิ่มโต๊ะเลื่อยไม้</a>
            </div>
            <br> <br>
            <table class="table table-striped table-responsive">
                <tbody>
                    <?php
                    for ($i = 1; $i <= 10; $i++) { ?>
                        <tr>
                            <td><a href="post.php?id=<?php echo $i; ?>">&nbsp&nbspโต๊ะที่ <?php echo $i; ?></a></td>
                            <?php

                            if ($_SESSION["role"] == "a") { ?>
                                <td><a class="btn btn-danger" action="" href="delete.php?id=<?php echo $i; ?>" role="button"><span class="glyphicon glyphicon-trash"></span></a></td>
                            <?php } ?>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
<?php
}
?>

</html>