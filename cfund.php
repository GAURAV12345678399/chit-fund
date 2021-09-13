<?php
session_start();
$uname=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>myFunds  client  chitFund</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
	<header><h1>CHIT FUND</h1>
	</header>

  	<nav>
  		<ul>
  			<li><a href="chome.php">myFunds</a></li>
  			<li id='selected'>chitFunds</li>
  			<li><a href="caccount.php">account</a></li>
  			<li><a href="cprofile.php">myProfile</a></li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>	

<section>
	<table>
	<tr>
	<th>FID</th>
	<th>AMOUNT</th>
	<th>MAX MEMBERS</th>
	<th>JOINED</th>
	<th>REQUEST</th></tr>
	<?php
	$conn=mysqli_connect("localhost","root","","chitfund");
	if($conn->connect_error){die();}
	$sql="SELECT f.* FROM fund f WHERE totmembers<>onmembers and not EXISTS (SELECT 1 FROM fmembers fm WHERE f.fid=fm.fid and fm.uname='$uname')"; 
	$result=$conn->query($sql);
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	echo "<tr><td>".$row["fid"]."</td><td>".$row["amount"]."</td><td>".$row["totmembers"]."</td><td>".$row["onmembers"]."</td><td><a href='request.php?fid=".$row['fid']."'>Request</a></td></tr>";
	
	}echo "</table>";}else{echo "<p>No new fund available</p>";}
	$conn->close();
	?>
	</table>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>
</body>
</html>
