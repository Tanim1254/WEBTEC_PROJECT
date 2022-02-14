<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<h1>Producer Details</h1>
<body>
    <h1>View Producer</h1>
    <table>
 </table>
 </body>
 </html>  

<?php
session_start(); 
if(empty($_SESSION["username"])) 
{

header("Location: ../view/login.php"); 
}




// connect to the database

include('../model/AdminDb.php');
$username=$_SESSION['username'];





    $connection = new db();
    $conobj=$connection->OpenCon();

    $userQuery=$connection->ShowAll($conobj,"producer");

    if ($userQuery->num_rows > 0) {
             echo "<table><tr><th>ProducerId</th><th>Name</th><th>Password</th><th>Email</th></tr>";
// output data of each row
            while ($row = $userQuery->fetch_assoc()) {
          echo "<tr><td>" . $row["ProducerId"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["password"] . "</td><td>" . $row["Email"] . "</td><td>" .    "</td></tr>";
            }
echo "</table>";
} 
else {
echo "0 results";
}

      
    
$connection->CloseCon($conobj);
?>