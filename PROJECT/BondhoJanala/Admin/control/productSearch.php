<?php
include('../model/productdb.php');

$user = $_POST['uname'];



if($user!="")
{

$connection = new db();
$conobj=$connection->OpenCon();

   $userQuery=$connection->SearchByName($conobj,"product",$user);

    if ($userQuery->num_rows > 0) {
             echo "<table><tr><th>ProductName</th><th>Price</th><th>Quantity</th><th>Availability</th><th>ReleaseDate </th></tr>";
// output data of each row
            while ($row = $userQuery->fetch_assoc()) {
          echo "<tr><td>" . $row["ProductName"] . "</td><td>" . $row["Price"] . "</td><td>" . $row["Quantity"] . "</td><td>" . $row["Availability"] . "</td><td>" . $row["ReleaseDate"] . "</td><td>" .   "</td></tr>";
            }
echo "</table>";
} 
else {
echo "0 results";
}
}

else{
  echo "please Enter Something";
  
}