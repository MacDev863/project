<?php
    $serverName='localhost';
	$userName='root';
	$userPassword='';
    $dbName='project_wood';
    $email =$_POST['email'];
    $username =$_POST['login'];
    $password =$_POST['pwd']; 
    $confirmpassword =$_POST['pwd1']; 
 

    if($email==''|| $username==''||$password==''||$confirmpassword=='' ){
        echo 'กรุณากรอกข้อมูล'.'<BR>';
    }
    elseif (strlen($password)<6) {
        echo 'กรุณากรอกพลาสเวิร์ดอย่างน้อย 6 ตัว'.'<BR>';
    
    }elseif ($confirmpassword!=$password) {
        echo 'กรุณากรอกพลาสเวิร์ดให้ตรงกัน'.'<BR>';
    }
    else{       
        $conn=new mysqli($serverName,$userName,$userPassword,$dbName);
        mysqli_set_charset($conn,"utf8");
       $email_check_query="SELECT * FROM user WHERE email='$email'";
       $query=mysqli_query($conn,$email_check_query);
        $result=mysqli_fetch_assoc($query);
        if($result){
            if($result['email']==$email){
                echo 'มีผู้ใช้อีเมล์นี้แล้ว';
            }
        }else{
            $password1=md5($password);
            $sql="INSERT INTO user (email,username,password) VALUES ('$email','$username','$password1')";
            mysqli_query($conn,$sql);
            echo 'บันทึกข้อมูลเรียบร้อย'; 
        $conn = null ;
        }
     
   
     
    
     
}
  

       



?>

