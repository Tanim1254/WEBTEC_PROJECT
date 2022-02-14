<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<h1>Order Details</h1>
<body>
    <h1>View Orders</h1>
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

    $userQuery=$connection->ShowAll($conobj,"orders");

    if ($userQuery->num_rows > 0) {
             echo "<table><tr><th>OrderId</th><th>TotalAmount</th><th>Status</th><th>OrderList</th></tr>";
// output data of each row
            while ($row = $userQuery->fetch_assoc()) {
          echo "<tr><td>" . $row["OrderId"] . "</td><td>" . $row["TotalAmount"] . "</td><td>" . $row["Status"] . "</td><td>" . $row["Orderlist"] . "</td><td>" .    "</td></tr>";
            }
echo "</table>";
} 
else {
echo "0 results";
}

      
    
$connection->CloseCon($conobj);
?>