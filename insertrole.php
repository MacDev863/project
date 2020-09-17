<?php
   
    $serverName='localhost';
	$userName='root';
	$userPassword='';
    $dbName='project_wood';
    $email =$_POST['email'];
    $role =$_POST['role'];
    $conn=new mysqli($serverName,$userName,$userPassword,$dbName);
    mysqli_set_charset($conn,"utf8");
    $query=$conn->query("SELECT * FROM user WHERE email='$email'");
    $result=$query->fetch_assoc();
    if(!$result){
        echo 'ไม่มีข้อมูลในระบบ';
    }else {
       	#การแก้ไขข้อมูล
	$sql="UPDATE user SET role='$role' WHERE email='$email' ";
	$query=$conn->query($sql);
	if ($query) {
		echo 'แก้ไขข้อมูลเสร็จเรียบร้อย';
	}else{
		die('Error : ('.$conn->errno.')'.$conn->error);
	}
	$conn->close();	
    }
