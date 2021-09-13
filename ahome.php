<!DOCTYPE html>
<html>
<head>
	<title>myFunds  client  chitFund</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
	<header>
	<h1 style="font-size:70px;color: blue;text-align:center;">CHIT FUND</h1>
	</header>

  	<nav>
  		<ul>
  			<li id='selected'>chitFunds</li>
  			<li><a href="acrtfund.php">newFunds</a></li>
  			<li><a href="arequest.php">Reuests</a></li>
  			<li><a href="aclients.php">clients</a></li>
  			<li><a  href="logout.php">Logout</a></li>
  		</ul>
  	</nav>	
<section>
	<table>
	<tr>
	<th>FID</th>
	<th>AMOUNT</th>
	<th>MAX MEMBERS</th>
	<th>JOINED MEMBERS</th>
	<th>CALLS MADE</th></tr>
	<?php
	$conn=mysqli_connect("localhost","root","","chitfund");
	if($conn->connect_error){die();}
	$sql="select * from fund";
	$result=$conn->query($sql);
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	echo "<tr><td><a href='afund.php?fid=".$row['fid']."'>".$row["fid"]."</a></td><td>".$row["amount"]."</td><td>".$row["totmembers"]."</td><td>".$row["onmembers"]."</td><td>".$row["nocalls"]."</td></tr>";
	
	}echo "</table>";}
	$conn->close();
	?>
	</table>
</section>
<footer><p>&#169;2020 copyright:chitfund</p></footer>
</body>
</html>
