<?php
    $widht =$_POST['widht'];
    $lenght =$_POST['lenght'];
    $weight =$_POST['weight'];
    $price =$_POST['price']; 
    $category =$_POST['category']; 
    $conn = new PDO("mysql:host=localhost;dbname=project_wood;charset=utf8","root","");
    $sql="INSERT INTO product (widht,lenght,price,weight,grade) VALUES ('$widht','$lenght','$price','$weight','$category')";
    $conn->exec($sql);
$conn = null ;
?>

