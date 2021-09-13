<?php
session_start();
$uname=$_SESSION['uname'];
$conn=new mysqli('localhost','root','','chitfund');
if($conn->connect_error){die('connection failed'.$conn->connect_error);}
$sql="select balance from clients where uname='$uname'";
$result=$conn->query($sql);
$row=$result->fetch_assoc(); 
if(isset($_POST['amount'])){
if($conn->connect_error){die('connection failed'.$conn->connect_error);}
$sum=$_POST['amount']+$row['balance'];
$sql="update clients set balance='$sum' where uname='$uname'";
$conn->query($sql);
$_SESSION['status']="Amount added";
}
header('Location:caccount.php');
?>
