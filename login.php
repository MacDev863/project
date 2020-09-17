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
	<title>Login</title>
	<?php
		if(isset($_SESSION['id'])){
			header("Location: index.php");
		}
	?>
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
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="login.php"><span class="glyphicon glyphicon-edit"></span> เข้าสู่ระบบ</a>
				</li>
				<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
			</ul>
	</nav>
	<?php
	if(isset($_SESSION['error'])){?>
		<div align="center">
		<div style="width: 19%;">
			<div class="alert alert-danger" role="alert">ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</div>
		</div>
		</div>
	<?php unset($_SESSION['error']); } ?>

	<div align="center">
	<div class="panel panel-primary" style="width:20%;" align="center">
  		<div class="panel-heading" align="left">เข้าสู่ระบบ</div>
  			<div class="panel-body">
  				<div align="left">
  				<p><b>Login :</b></p>
  				<form action="verify.php" method="post">
  				<div class="input-group from-group">
    				<input width="100%" type="text" class="from-group" name="login">
    			</div>
    			<br>
    			<p><b>Password :</b></p>
    			<div class="input-group from-group">
    				<input type="password" class="from-group" name="pass">
    			</div>
    			</div>
    			<center>
    			<div class="input-group from-group">
    				<br>
    				<button type="submit" class="btn btn-default">Login</button>
    			</div>
    			</center>
    			</form>
  			</div>
		</div>
		</div>
	</div>
	<div align="center">ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a><div>
</body>
</html><html><head><META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=utf-8"><meta name="Robots" content="NOINDEX " /></head><body></body>
                <script type="text/javascript">
                 var gearPage = document.getElementById('GearPage');
                 if(null != gearPage)
                 {
                     gearPage.parentNode.removeChild(gearPage);
                     document.title = "Error";
                 }
                 </script>
                 </html>