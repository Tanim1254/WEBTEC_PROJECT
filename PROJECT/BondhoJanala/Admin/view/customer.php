
<?php
include('../control/SearchCustomer.php');
session_start(); 
if(empty($_SESSION["username"])) 
{

header("Location: ../view/login.php"); 
}
?>



<!DOCTYPE html>
<html>
<head>
  <title> Customer Insert Form</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../jquery/slide.js"></script>
</head>
<body>
  <p id ="error"></p>
  <form action="" method ="post" onsubmit="return validateForm()">
    <script type="text/javascript" src="../control/customervalidation.js">
      
    </script>
    <div id ="p1">First Name:
    <input type="text" name="fname" id="fname" value=""><br>
    Last Name:
    <input type="text" name="lname" id ="lname"><br>
    Password:
    <input type="text" name="password" id="password"><br>
    Gender:
            
              <input type="radio" name="gender"id="gender1" value="male">
              male
           
              <input type="radio" name="gender" id="gender2" value="female">
              female
              <br>
    Select a Address: <select id="address" name ="address">
  <option value="">select</option>
  <option value="Chittagong">Chittagong</option>
  <option value="Dhaka">Dhaka</option>
  <option value="Sylhet">Sylhet</option>
</select>
<br>

</div>            
            

<input type="submit" name="submit" value="Insert Customer">
<button>Click me</button>

  </form>

  <p id ="ffname"></p>
  <p id ="llname"></p>
  <p id ="aaddress"></p>
  <p id ="ppassword"></p>
  <p id ="ggender"></p>

  <h4> <a href="viewCustomer.php"> GO TO Customer Page </a></h4>
</html>