<?php
session_start(); 
if(empty($_SESSION["username"])) 
{

header("Location: ../view/login.php"); 
}




// connect to the database

include('../model/AdminDb.php');
$username=$_SESSION['username'];
$password="";
$email="";
$phone="";

$error="";




    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->ShowP($conobj,"registeradmin",$username);

    if($userQuery)

    {
        $row = mysqli_fetch_assoc($userQuery);
       $name= $row['Username'];
       $email= $row['Email'];
       $password= $row['Password'];
       $phone=$row['MobileNo'];


        //echo "This is ur Profile.";
        // echo "<table><tr><th>ID</th><th>Username</th><th>Password</th><th>Email</th><th>MobileNo</th></tr>";
        // echo "<td>$name</td>"
        
    }

      
   else 
   {
     echo "failed";
   } 
$connection->CloseCon($conobj);
// display records if there are records to display







?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<h1>WElCOME TO YOUR PROFILE </h1>
<body>
  <h5>Want's to go back: </h5> <a href="pageone.php">back</a>
    <h1>View Profile</h1>
    <fieldset>
    <table>

Name: <?php echo $name; ?>
<hr>
Email: <?php echo $email; ?>
<hr>
Password: <?php echo $password; ?>
<hr>
Mobile No: <?php echo $phone; ?>
<hr>
    </fieldset>

</body>
</html>
<br>
 <a href="updateprofile.php">Update Profile</a>
 

