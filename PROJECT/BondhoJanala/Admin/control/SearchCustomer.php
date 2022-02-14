<?php
include("../model/customerdb.php");

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$gender=$_POST['gender'];
$address=$_POST['address'];
if (empty($_POST['fname']) || empty($_POST['lname'])|| empty($_POST['password']) || empty($_POST['gender']) || empty($_POST['address']))
{
  echo "Plz Fill all the fields correctly";
}

else
{
  $fname = $_POST['fname'];
$lname = $_POST['lname'];
$password = $_POST['password'];
$gender=$_POST['gender'];
$address=$_POST['address'];

//if session is set the page will move to page 0ne
    
    $connection= new db();
    $conobj=$connection->OpenCon();
    $AdminQuery=$connection->InsertCustomer($conobj,"customer",$fname,$lname,$password,$gender,$address);
    //header("location: login.php");
    
    
}
}

?>