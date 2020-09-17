<?php
	$serverName='localhost';
	$userName='root';
	$userPassword='';
	$dbName='';
	$conn=new mysqli($serverName,$userName,$userPassword,$dbName);
	mysqli_set_charset($conn,"utf8");
	#การลบข้อมูล
    $sql="DELETE FROM user WHERE email='s6203052412091@email.com'";
	$query=$conn->query($sql);
	if ($query) {
		echo 'ลบข้อมูลเสร็จเรียบร้อย';
	}else{
		die('Error : ('.$conn->errno.')'.$conn->error);
	}
	$conn->close();
?>