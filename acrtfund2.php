<?php

$fid=$_POST['fid'];
$amt=$_POST['amount'];
$member=$_POST['member'];

if(!empty($fid) and !empty($amt) and !empty($member)){ 
$conn=new mysqli('localhost','root','','chitfund');
if(!$conn){die("error");}
$sql="select * from fund where fid='$fid'";
$result=$conn->query($sql);
if($result->num_rows==0){
$sql="insert into clients (fid,amount,totmembers,onmembers,nocalls) values('$fid','$amt','$member','0','0')";

if(mysqli_query($conn,$sql)){echo "success";header('Location:home.php');}else{echo "error";}
$conn->close();
}}else{exit;}

?>
