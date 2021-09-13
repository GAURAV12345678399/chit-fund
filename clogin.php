<?php
session_start();

$uname=$_POST['cuname'];
$pass=$_POST['cpass'];

$conn= new mysqli('localhost','root','','chitfund');
if(!conn){die();}
$sql="select * from clients where uname='$uname' and pass='$pass'";
$result=$conn->query($sql);
if($result->num_rows>0){
$_SESSION['uname']=$_POST['cuname'];
$_SESSION['pass']=$_POST['cpass'];

header('Location:chome.php');}
else {$_SESSION['status']="Invalid userid or password";header('Location:home.php');}



?>
