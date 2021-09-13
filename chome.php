<?php
session_start();
$uname=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>cHome</title>
<link rel='stylesheet' type='text/css' href='style5.css'>
</head>
<body>
	<header><h1>CHIT FUND</h1></header>

  	<nav>
  		<ul>
  			<li id='selected'>myFunds</li>
  			<li><a href="cfund.php">chitFunds</a></li>
  			<li><a href="caccount.php">account</a></li>
  			<li><a href="cprofile.php">myProfile</a></li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>
<section>

	<table>
	<tr>
	<th>FID</th>
	<th>WON</th>
	<th>WON DATE</th>
	<th>CALLS MADE</th></tr>
	<?php
	$conn=mysqli_connect("localhost","root","","chitfund");
	if($conn->connect_error){die();}
	$sql="select * from fmembers where uname='$uname' and request='a'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	$fid=$row['fid'];
	$sql="select nocalls from fund where fid='$fid'";
	$result=$conn->query($sql);
	$row2=$result->fetch_assoc();
	echo "<tr><td>".$row["fid"]."</td><td>".$row["won"]."</td><td>".$row["wondate"]."</td><td>".$row2['nocalls']."</td></tr>";
	
	}echo "</table>";}
	$conn->close();
	?>
	</table>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>
</body>
</html>
