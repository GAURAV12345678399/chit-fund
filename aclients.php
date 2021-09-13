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
  			<li id='selected'>clients</li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>	
<section>
	<table>
	<tr>
	<th>USER ID</th>
	<th>FIRST NAME</th>
	<th>LAST NAME</th>
	<th>EMAIL</th>
	<th>PH NUMBER</th>
	<th>BALANCE</th></tr>
	<?php
	$conn=mysqli_connect("localhost","root","","chitfund");
	if($conn->connect_error){die();}
	$sql="select uname,fname,lname,email,phnumber,balance from clients";
	$result=$conn->query($sql);
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	echo "<tr><td>".$row["uname"]."</td><td>".$row["fname"]."</td><td>".$row["lname"]."</td><td>".$row["email"]."</td><td>".$row["phnumber"]."</td><td>".$row["balance"]."</td></tr>";
	
	}echo "</table>";}
	$conn->close();
	?>
	</table>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>
</body>
</html>
