<?php
include('../control/logincheck.php');
$success="";

if(isset($_SESSION['username']))
{
	//header("location: pageone.php");


}
elseif(isset($_SESSION['error']))
{

	$success = $_SESSION['error'];

}


?>


<!DOCTYPE html>
<html>
<body>
	<header>
  <h1>Welcome to Bondho Janala</h1>
  </header>

<?php echo $success?>
<h2>Log In</h2>
<link rel="stylesheet" type="text/css" href="../css/design.css">
<form action="" method="post"enctype="multipart/form-data">
	<fieldset >
    <input type="text" name="username" placeholder="Enter your username" ><br><br>

    <input type="password" name="password" placeholder="Enter your password" >
</fieldset>
    <input name="submit" type="submit" value="LOGIN">
    <input type="reset" name="reset">
    <h4>Don't have an account </h4>
    <h5>plz register here: <a href="registration.php">register</a><h5>
     
</form>
<br>
<?php echo $error; ?>



</body>
</html>