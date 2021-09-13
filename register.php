<!DOCTYPE html>
<html>
<head>
	<title>chitFund | Register</title>
	<link rel="stylesheet" type="text/css" href="style5.css">
<style>

form {
  background: #fff;
  padding: 4em 4em 2em;
  max-width: 400px;
  margin: 50px auto 0;
  box-shadow: 0 0 1em #222;
  border-radius: 2px;
 	}


form h2 {
    margin:0 0 50px 0;
    padding:10px;
    text-align:center;
    font-size:30px;
    color:#373b38;
    border-bottom:solid 1px #e5e5e5;
  }
form span {
    display:block;
    background: #F9A5A5;
    padding: 2px 5px;
    color: #666;
  }
form input{clear:both;width:100%;margin:2%}
#submit:hover{background:#c99740;border-radius:10px;}
</style>
</head>
<body>
	<header><h1>CHIT FUND</h1></header>

<section style="height:800px;">
  <form action="register.php" method="post">
<h2>Register</h2>    
    <label for="fname">FIRST NAME:</label>
    <input  type="text" placeholder="Enter First name" name="fname" required>
    <label for="lname">LAST NAME:</label>
    <input type="text" placeholder="Enter last name" name="lname" required>
    <label for="uname">USER ID:</label>
    <input type="text" placeholder="Enter user id" name="uname" required>
    <label for="email">EMAIL ID:</label>
    <input type="email" placeholder="Enter email id" name="email" required>
    <label for="phnumber">PH NUMBER:</label>
    <input type="number" min='1000000000' max='9999999999' placeholder="Enter phone number" name="phnumber" required>
    <label for="pass">PASSWORD:</label>
    <input type="password" placeholder="Enter password" name="pass" required>
    <label for="pass2">CONFIRM PASSWORD:</label>
    <input type="password" placeholder="Confirm password" name="pass2" required>
    <br><input type="submit" name="reg" value="Register" id='submit'>
    <br><p>Already a member?<a href="home.php">Login</a></p>
  </form>
<?php
if(isset($_POST['reg'])){
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$pass2=$_POST['pass2'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$phnumber=$_POST['phnumber'];
$balance="0";

if(!empty($uname) and !empty($pass) and !empty($pass2) and !empty($fname) and !empty($lname)){ 
if(!empty($email) and !empty($phnumber)){
if($pass===$pass2){
$conn=new mysqli('localhost','root','','chitfund');
if(!$conn){die("error");}
$sql="select * from clients where uname='$uname'";
$result=$conn->query($sql);

if($result->num_rows==0){
$sql="insert into clients (uname,pass,fname,lname,email,phnumber,balance) values('$uname','$pass','$fname','$lname','$email','$phnumber','$balance')";

if(mysqli_query($conn,$sql)){header('Location:home.php');}else{echo "error";}
}else{echo "<script>alert('user id not available')</script>";}
}else{echo "<script>alert('Password mismatch')</script>";}

}}else{exit;}
}
?>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>
</body>
</html>
