<?php
include("../model/AdminDb.php");
$usernameValidation="";
$passwordValidation="";
$emailValidation="";
$phoneValidation="";

if ($_SERVER["REQUEST_METHOD"]=="POST") 
{
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone=$_POST['phone'];
if (empty($_POST['username']) || empty($_POST['password'])|| empty($_POST['email']) || empty($_POST['phone']))
{
	echo "All fields required";
}
if(strlen($_POST['username'])<5)
{
	$usernameValidation="Plz fill up the username correctly";
	
}
if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$email))
{
	$emailValidation="You must enter a valid email";
}
if(strlen($_POST['password'])<8)
{
	$passwordValidation ="Your password must be more than 8 characters";
}
if(strlen($_POST['phone'])<11)
{
	$phoneValidation ="Plz enter a valid number";
}

else
{
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone=$_POST['phone'];
//if session is set the page will move to page 0ne
    
    $connection= new db();
    $conobj=$connection->OpenCon();
    $AdminQuery=$connection->InsertAdmin($conobj,"registeradmin",$username,$password,$email,$phone);
    //header("location: login.php");
    
    
}
}

?>