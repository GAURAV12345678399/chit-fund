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
  			<li id='selected'><b>Reuests</b></li>
  			<li><a href="aclients.php">clients</a></li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>	
<section>
	<table>
	<tr>
	<th>FID</th>
	<th>uid</th>
	<th>Approve</th>
	<th>Delete</th></tr>
	<?php
	$conn=mysqli_connect("localhost","root","","chitfund");
	if($conn->connect_error){die();}
	$sql="select * from fmembers where request='r'";
	$result=$conn->query($sql);
	if($result->num_rows>0){
	while($row=$result->fetch_assoc()){
	echo "<tr><td>".$row["fid"]."</td><td>".$row["uname"]."</td><td><a href='request.php?uname=".$row['uname']."&fid=".$row['fid']."&approved=a'>&check;</a></td><td><a href='request.php?uname=".$row['uname']."&fid=".$row['fid']."'>&times;</a></td></tr>";
	
	}echo "</table>";}
	$conn->close();
	?>
	</table>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>
</body>
</html>
