<?php 
include( '../control/registrationcheck.php');


?>
<!DOCTYPE html>
<html>
<head>
  
</head>

<body>




<h2>Registration</h2>

<form action="" method="post">
  
  <fieldset align="middle">
    <p > Enter Username: </p>
    <input  type="text"  name="username" placeholder="Enter your username" ><br>
    <?php echo $usernameValidation; ?>


    <p > Enter password: </p>
    <input type="text" name="password" placeholder="Enter your password" >
    <br>
    <?php echo $passwordValidation; ?>
    <br>

   
  <P>Enter your email:  </P>
  <input type="text" name="email" placeholder="Enter your email">   
  <br>
  <?php echo $emailValidation; ?>
  <br>
  <p>Enter Phone Number: </p>
  <input type="text" name="phone" placeholder="Enter Your Phone Number">
  <br>
  <?php echo $phoneValidation; ?>
  <br>
  </fieldset>





<input name="submit" type="submit" value="Registration">
<input type="reset" name="reset">

<br>


</body>
</html>
