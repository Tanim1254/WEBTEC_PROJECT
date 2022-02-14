<?php
include('../model/delmandb.php');

$user = $_POST['uname'];



if($user!="")
{

$connection = new db();
$conobj=$connection->OpenCon();

   $userQuery=$connection->SearchByName($conobj,"deliverman",$user);

    if ($userQuery->num_rows > 0) {
             echo "<table><tr><th>DeliveryId</th><th>Name</th><th>Password</th><th>Phone</th><th>Status</th></tr>";
// output data of each row
            while ($row = $userQuery->fetch_assoc()) {
          echo "<tr><td>" . $row["DeliverManId"] . "</td><td>" . $row["Name"] . "</td><td>" . $row["Password"] . "</td><td>" . $row["Phone"] . "</td><td>" .$row["Status"].    "</td></tr>";
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