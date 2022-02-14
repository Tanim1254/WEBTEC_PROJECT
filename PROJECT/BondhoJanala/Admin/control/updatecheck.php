
<?php
include("../model/AdminDb.php");
if(isset($_POST['submit']))
{ 
  
  if (empty($_POST['username'] || $_POST['password'] || $_POST['email'] || $_POST['phone'])) {




echo "Plese fill up the boxes correctly";
}
  
//if session is set the page will move to page 0ne
 
    else {
$connection = new db();
$conobj = $connection->OpenCon();
$userQuery = $connection->UpdateProfile($conobj, "registeradmin", $_POST['username'], $_POST['password'], $_POST['email'], $_POST['phone']);

header('location: profile.php');
$connection->CloseCon($conobj);
}

}
    //header("location: login.php");

?>