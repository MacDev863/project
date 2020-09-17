<!DOCTYPE html>
<html>
<head>
	<title>ลบโต๊ะ</title>
	<?php
		session_start();
		if($_SESSION['username']!="admin"){
			header("Location: index.php");
		}
	?>
	
</head>
<body>
   <b>ลบโต๊ะ หมายเลข <?php echo $_GET['id'];?></b>
</body>
</html>