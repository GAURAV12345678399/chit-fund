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
  			<li><a href="cfund.php">chitFunds</a></li>
  			<li id='selected'>account</li>
  			<li><a href="cprofile.php">myProfile</a></li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>	
<section>
<?php
$conn=new mysqli('localhost','root','','chitfund');
if($conn->connect_error){die('connection failed'.$conn->connect_error);}
$sql="select balance from clients where uname='$uname'";
$result=$conn->query($sql);
$row=$result->fetch_assoc(); 
echo "<h5>Balance: ".$row['balance']." Rs</h5>";
?>
<form action='caccount2.php' method='post'>
<label for='amount'>Amount: </label>
<input type='number' min='0' name='amount' required>
<input type='submit' value='Add'>
</form>
<?php
if(isset($_SESSION['status'])){echo "<script>alert('Amount added successfully')</script>";unset($_SESSION['status']);}
?>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>

</body>
</html>
