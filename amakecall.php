<?php
session_start();
$conn=new mysqli('localhost','root','','chitfund');
$fid=$_GET['fid'];
$unames=array();
$sql="select * from fund where fid='$fid'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();

$amount=$row['amount'];
$totamount=$amount*$row['totmembers'];
$nocalls=$row['nocalls'];

if($row['totmembers']==$row['onmembers']){echo "one";
if($row['totmembers']>$row['nocalls']){
	$sql="select * from fmembers where request='a' and fid='$fid' and won='no'";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){array_push($unames,$row['uname']);}
	$uname=$unames[array_rand($unames,1)];
	//setting won
	$date1=date("d/m/Y");
	$sql="update fmembers set won='yes',wondate='$date1' where fid='$fid' and uname='$uname'";
	$conn->query($sql);
	//add fund to client
	$sql="select * from clients where uname='$uname'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	$sum=$row['balance']+$totamount;
	$sql="update clients set balance='$sum' where uname='$uname'";
	$conn->query($sql);
	//reduce amount from all clients
/*
	$sql="select * from fmembers where request='a' and fid='$fid'";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){array_push($unames2,$row['uname']);}
	echo "$unames2[1]";
	while($unames2 as $value){
		$sql="select balance from clients where uname='$value'";
		$result=$conn->query($sql);
		$row2=$result->fetch_assoc();	
		$sum=$row2['balance']-$amount;
		$sql="update clients set balance='$sum' where uname='$value'";
		$conn->query($sql);}*/
	//nocalls++
	$sum=$nocalls+'1';
	$sql="update fund set nocalls='$sum' where fid='$fid'";
	$conn->query($sql);
$_SESSION['status']="call made successfully";
}else{echo "max call made";}
}else{$_SESSION['status']="insufficient members";}
header("Location:afund.php?fid=$fid");
?>
