<!DOCTYPE html>
<html>
<head>
	<title>myFunds  client  chitFund</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
</head>
<body>
	<header>
	<h1>CHIT FUND</h1>
	</header>

  	<nav>
  		<ul>
  			<li><a href="ahome.php">chitFunds</a></li>
  			<li id='selected'>newFunds</li>
  			<li><a href="arequest.php">Reuests</a></li>
  			<li><a href="aclients.php">clients</a></li>
  			<li><a href="logout.php">Logout</a></li>
  		</ul>
  	</nav>	
<section>
  <form action="acrtfund.php" method="post">
    <div class="container">
    <label for="fid">FUND ID:</label>
    <input type="text" placeholder="Enter id" name="fid" required>
    <label for="amount">AMOUNT:</label>
    <input type="text" placeholder="Enter amount" name="amount" required>
    <label for="member">MAX MEMBERS:</label>
    <input type="text" placeholder="Enter no of members" name="member" required>
    <br><br><input type="submit" name="addFund" value="ADD FUND" style="width:auto;">
    </div>
  </form>
<?php
if(isset($_POST['addFund'])){
$fid=$_POST['fid'];
$amt=$_POST['amount'];
$member=$_POST['member'];

if(!empty($fid) and !empty($amt) and !empty($member)){ 
$conn=new mysqli('localhost','root','','chitfund');
if(!$conn){die("error1");}
$sql="select * from fund where fid='$fid'";
$result=$conn->query($sql);
if($result->num_rows==0){
$sql="insert into fund (fid,amount,totmembers,onmembers,nocalls) values('$fid','$amt','$member','0','0')";

if(mysqli_query($conn,$sql)){echo "";}else{echo "error2";}
echo "<script>alert('Fund added successfully')</script>";
}else{echo "<script>alert('Fund id already used')</script>";}
$conn->close();}else{exit;}
}
?>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>
</body>
</html>
