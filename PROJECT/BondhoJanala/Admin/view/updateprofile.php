<?php
session_start(); 
$error="";
if(empty($_SESSION["username"])) 
{
$_SESSION['error'] = "You have to log in";
header("Location: ../view/login.php"); 
}
include('../control/updatecheck.php');
?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../jquery/slide.js"></script>
</head>
<body>
  <form action="" method="POST">



<h5>Want's to go back: </h5> <a href="profile.php">back</a>
<h2>HELLO ADMIN</h2>
<fieldset align ="center">
  

<div id="panel">
    <p> Enter Username: </p>
    <input type="text" name="username" placeholder="Enter your username" ><br> 



    <p> Enter password: </p>
    <input type="password" name="password" placeholder="Enter your password" >
    <br>

    <br>

  
  <P>Enter your email:  </P>
  <input type="email" name="email" placeholder="Enter your email">  
  <br>


  <br>
  <p>Enter Phone Number: </p>
  <input type="phone" name="phone" placeholder="Enter Your Phone Number">
  <br>

  <br>

</div>
</fieldset>


<input type="submit" name="submit"value="Update Profile">
<input type="reset" name="reset">
<button id="stop">Stop sliding</button>

<div id="flip">Click to slide down panel</div>

</form>
<br>
[note:you cannot change your username.You have to put username as it is]

</body>
</html>
