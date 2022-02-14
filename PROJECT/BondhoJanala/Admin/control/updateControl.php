<?php

include('../model/customerdb.php');
session_start();

if(empty($_SESSION["username"])) 
{

header("Location: ../view/login.php"); 
}
$error="";
$fname=$lname=$password=$address="";
$not_found=$update_message=$delete_message="";

if(isset($_POST["search"])){

 $connection = new db();
 $conobj=$connection->OpenCon();
 
 $userQuery=$connection->SearchUsername($conobj,"customer", $_POST["fname"]);
 
 if ($userQuery->num_rows > 0) {
 
     // output data of each row
     while($row = $userQuery->fetch_assoc()) {
       //$show_username=$row["username"];
       $fname=$row["fname"];
       $lname=$row["lname"];
       $password=$row["password"];
       $address=$row["address"];
     
   } 
 }
   else
    {
      $not_found="Nothing Found !";
    }
}

 if(isset($_POST["update"]))
 {
      $_POST["fname"]."<br>";
      $_POST["fname"]."<br>";
      $_POST["lname"]."<br>";

      $_POST["password"]."<br>";
      
      $_POST["address"]."<br>";
     //echo $_POST["userName"]."<br>";


     $connection = new db();
     $conobj=$connection->OpenCon();
     $UpdateTutor=$connection->UpdateCustomer($conobj,"customer",$_POST["fname"],$_POST["fname"],$_POST["lname"],$_POST["password"],$_POST["address"]);

     $update_message="Successfully Updated !";
    
 }

 if(isset($_POST["delete"]))
 {
     $connection = new db();
     $conobj=$connection->OpenCon();

     $query=$connection->DeleteTutor($conobj,"customer",$_POST["fname"]);

     $delete_message="Successfully Deleted !";

 }



?>