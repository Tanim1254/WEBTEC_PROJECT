<?php
session_start(); 
$error="";
if(empty($_SESSION["username"])) 
{
$_SESSION['error'] = "You have to log in";
header("Location: ../view/login.php"); 
}


?>
<?php

$cookie_name = "Admin";
$cookie_value= $_SESSION['username'];


setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
if(!isset($_COOKIE[$cookie_name])) {
echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
echo "Cookie '" . $cookie_name . "' is set!<br>";
echo "Admin is: " . $_COOKIE[$cookie_name];
}

?>


<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../jquery/slide.js"></script>
</head>
<body>
	<header>
<h1>Welcome Dear Admin <?php echo $_SESSION['username']; ?></h1>
</header>
<div id= "panel">
<section>
<fieldset>
	<nav>
		
<h1> Which User You want to control </h1>
</nav>
<br>
<fieldset align="middle">


<h3>Select  below: </h3>
<hr>
<hr>
<h4> <a href="customer.php">Customer </a></h4>
<hr>
<hr>
<h4> <a href="order.php">Orders</a></h4>
<hr>
<hr>
<h4> <a href="product.php"> Product </a></h4>
<hr>
<hr>
<h4> <a href="DeliveryMan.php"> Delivery Man </a></h4>
<hr>
<hr>
<div>
<h4> <a href="producer.php"> Producer </a></h4> </div>
<hr>
<hr>

<h4> <a href="profile.php"> GO TO PROFILE </a></h4>
<hr>
<hr>


</fieldset>
</section>
</div>

 <h3>Do you want to exit? Click here : <a href="../control/logout.php"><br>
 logout</a></h3>
 <button id="flip" >Click to close control menu </button>

</body>
</html>

<?php


?>   