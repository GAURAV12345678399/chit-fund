<?php
session_start();
$uname=$_POST['auname'];
$pass=$_POST['apass'];
$_SESSION['uname']=$uname;
$_SESSION['pass']=$pass;
echo $uname;
echo $pass;/*
$conn= new mysqli('localhost','root','','delete2');
if(!conn){die();}
$sql="select * from admin where uname='$uname' and pass='$pass'";
$result=$conn->query($sql);
if($result->num_rows>0){
header('Location:ahome.php');}
else {$_SESSION['status']="Failed";header('Location:home.php');}
*/
?>
