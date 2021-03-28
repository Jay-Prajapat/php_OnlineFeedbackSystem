<?php

session_start();

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'feedback');

$name=$_POST['user'];
$pass=$_POST['password'];

$sql=("SELECT * from login where name = '$name' && password = '$pass'");

$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
if($num==1){
    header('location:feedback.php');
}
else{
    header('location:login.php');
}




?>