<?php
session_start();
$uname=$_SESSION['uname'];
$conn=new mysqli('localhost','root','','chitfund');
?>
<!DOCTYPE html>
<html>
<head>
	<title>profile  client  chitFund</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
	<header>
	<h1>CHIT FUND</h1>
	</header>

  	<nav>
  		<ul>
  			<li><a href="chome.php">myFunds</a></li>
  			<li><a href="cfund.php">chitFunds</a></li>
  			<li><a href="caccount.php">account</a></li>
  			<li id='selected'>myProfile</li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>
<section>
<?php
$sql="select * from clients where uname='$uname'";
$result=$conn->query($sql);
$row=$result->fetch_assoc();
echo "<b><p>Name : ".$row['fname']." ".$row['lname']."</p>
	<p>Email : ".$row['email']."</p>
	<p>PH number : ".$row['phnumber']."</p></b>
";
?>
	
	<form action='cprofile.php' method='post'>
		<div class="container">
	<label for="email">EMAIL:</label>
      	<input type="email" placeholder="Enter new email" name="email" required>
      	<label for="phnumber">PH NUMBER:</label>
      	<input type='number' min='1000000000' max='9999999999' placeholder="Enter new PH number" name="phnumber" required>
      	<br><br><button name='newdets' id="LogBt" style="width:auto;">update</button>
      	</div>
	</form>	
<?php
if(isset($_POST['newdets'])){
if(!empty($_POST['phnumber']) and !empty($_POST['email'])){
$sql="update clients set email='".$_POST['email']."',phnumber='".$_POST['phnumber']."' where uname='$uname'";
$conn->query($sql);
echo "<script>alert('Successfully updated')</script>";
}
}

?>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>

</body>
</html>
