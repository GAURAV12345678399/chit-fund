<?php
session_start();
$fid=$_GET['fid'];
$uname=$_SESSION['uname'];
echo "$fid";
echo "$uname";

$conn=new mysqli('localhost','root','','chitfund');
if(!$conn){die("error");}

//admin fund request handling
if(isset($_GET['uname'])){
echo "admin";
$auname=$_GET['uname'];

//admin approved
if(isset($_GET['approved'])){
//checking seat availability
$sql="select * from fund where fid='$fid'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "  one=".$row['totmembers']."   two=".$row['onmembers']." got";
if($row['onmembers']<$row['totmembers']){
echo "<p>less than</p>";

$sql="update fmembers set request='a' where uname='$auname' and fid='$fid'";
$conn->query($sql);
$sum=$row['onmembers']+"1";
$sql="update fund set onmembers='$sum' where fid='$fid'";
$conn->query($sql);

// if fund full
if($row['totmembers']==$sum){
$sql="delete from fmembers where fid='$fid' and request='r'";
$conn->query($sql);
}
}
}
//admin rejected
else{$sql="update fmembers set request='d' where uname='$auname' and fid='$fid'";$conn->query($sql);
}
$conn->close();
header('Location:arequest.php');
}
//client fund request handling
else{$sql="insert into fmembers (fid,uname,won,wondate,request) values('$fid','$uname','no','0','r')";
$conn->query($sql);
$conn->close();

header('Location:cfund.php');}

?>
