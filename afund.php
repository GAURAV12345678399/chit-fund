<?php
session_start();
$conn=new mysqli('localhost','root','','chitfund');
if($conn->connect_error){die('connection failed');}
$fid=$_GET['fid'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>myFunds  client  chitFund</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
	<header><h1>CHIT FUND</h1></header>

  	<nav>
  		<ul>
  			<li><a href="ahome.php">chitFunds</a></li>
  			<li><a href="acrtfund.php">newFunds</a></li>
  			<li><a href="arequest.php">Reuests</a></li>
  			<li><a href="aclients.php">clients</a></li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>	
<section>
	<?php
	echo "<h4><a href='amakecall.php?fid=$fid'>MAKE CALL</a></h4>";
	if(isset($_SESSION['status'])){echo "<p id='status'>".$_SESSION['status']."</p>";unset($_SESSION['status']);}
	$sql="select * from fund where fid='$fid'";
	$result=$conn->query($sql);
	$row=$result->fetch_assoc();
	echo "<h2>FID: $fid  amount: ".$row['amount']."Maxmembers: ".$row['totmembers']."joined: ".$row['onmembers']."calls: ".$row['nocalls']."</h2>";
	 ?>
	<table>
	<tr>
	<th>Uname</th>
	<th>Won</th>
	<th>Won Date</th></tr>
	<?php
	$sql="select * from fmembers where fid='$fid'";
	$result=$conn->query($sql);

	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	echo "<tr><td>".$row["uname"]."</td><td>".$row["won"]."</td><td>".$row["wondate"]."</td></tr>";
	
	}echo "</table>";}
	$conn->close();
	?>
	</table>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>

</body>
</html>
