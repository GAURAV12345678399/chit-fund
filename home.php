<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>LOAN SERVICE</title>
<style>
/*body {font-family: Arial, Helvetica, sans-serif;}*/

header{
font-size:35px;
text-align:center;
color:blue;
text-shadow:5px 3px grey;
border-radius:30px;
border:4px solid violet;
}

body{
background:#eaafc8;
background:-webkit-linear-gradient(to right,#eaafc8,#654ea3);
background:linear-gradient(to right,#eaafc8,#654ea3);
min-height:100vh;
}
footer{
background-color:#777;
padding:10px;
text-align:center;
color:white;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

a{text-decoration: none;}
</style>

</head>
<body>
<header>
<h1>CHIT FUND</h1>
  </header>
<section style="height:500px;">
<!-- Trigger/Open The Modal -->
<button id="myBtn" style="width:auto;">Admin Login</button>
<button id="myBtn2" style="width:auto;">Client Login</button>
<button id="myBtn3" style="width:auto;color: red;"><a href='register.php'>Register</a></button>
<?php if(isset($_SESSION['status'])){echo "<script>alert('Invalid userid or password')</script>";unset($_SESSION['status']);} ?>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h5>ADMIN LOGIN</h5>
    <form action="alogin.php" method="post">
      <label for="uname">USER NAME:</label>
      <input type="text" placeholder="Enter Username" name="auname" required>
      <br><label for="psw">PASSWORD:</label>
      <input type="password" placeholder="Enter Password" name="apass" required>
      <br><button id="LogBt" style="width:auto;">Login</button>
    </form>
  </div>

</div>

<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span onclick="document.getElementById('myModal2').style.display='none'" class="close">&times;</span>
    <h5>CLIENT LOGIN</h5>
	<form action="clogin.php" method="post">
      <label for="cuname">USER NAME:</label>
      <input type="text" placeholder="Enter Username" name="cuname" required>
      <br><label for="cpass">PASSWORD:</label>
      <input type="password" placeholder="Enter Password" name="cpass" required>
      <br><button id="LogBt" style="width:auto;">Login</button>
      <p>Not yet a member?<a href="register.php">Register</a></p>
    </form>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}
btn2.onclick = function() {
  modal2.style.display = "block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>
</section>
<footer><p>&#169; copyrighy : chitfund</p></footer>
</body>
</html>
