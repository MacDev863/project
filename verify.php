<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Verify</title>
	<?php
	session_start();
	if (isset($_SESSION['id'])) {
		header("Location: index.php");
	} else {
		header("Location: index.php");
	}
	?>
</head>

<body>
	<h1 align="center">Webboard KakKak</h1>
	<hr>
	<center>
		<?php
		$serverName = 'localhost';
		$userName = 'root';
		$userPassword = '';
		$dbName = 'project_wood';
		$User = $_POST["login"];
		$password = $_POST["pass"];
		$password = md5($password);
		$conn = new mysqli($serverName, $userName, $userPassword, $dbName);
		mysqli_set_charset($conn, "utf8");
		$email_check_query = "SELECT * FROM user WHERE username='$User'";
		$query = mysqli_query($conn, $email_check_query);
		$result = mysqli_fetch_assoc($query);
		$email_check_query2 = "SELECT * FROM user WHERE role='a'";
		$query2 = mysqli_query($conn, $email_check_query2);
		$result2 = mysqli_fetch_assoc($query2);
		$email_check_query1 = "SELECT * FROM user WHERE password='$password'";
		$query1 = mysqli_query($conn, $email_check_query1);
		$result1 = mysqli_fetch_assoc($query1);
		if ($User == "admin" && $password == $result1['password']) {
			echo "ยินดีต้อนรับคุณ ADMIN <br>";
			echo "<a href=" . "index.php" . ">กลับไปยังหน้าหลัก</a>";
			$_SESSION['username'] = $User;
			$_SESSION['role'] = "a";
			$_SESSION['id'] = session_id();
		} elseif ($User == $result['username'] && $password == $result1['password']) {
			echo "ยินดีต้อนรับคุณ MEMBER <br>";
			echo "<a href=" . "index.php" . ">กลับไปยังหน้าหลัก</a>";
			$_SESSION['username'] = $User;
			$_SESSION['role'] = "m";
			$_SESSION['id'] = session_id();
		} else {
			$_SESSION['error'] = session_id();
			header("Location: login.php");
		}
		?>
	</center>

</body>

</html>