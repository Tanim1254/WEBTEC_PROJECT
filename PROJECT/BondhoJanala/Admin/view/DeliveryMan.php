<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="../jquery/slide.js"></script>
    <script>
function showmyuser() {
  var uname=  document.getElementById("uname").value;
  

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext").innerHTML = this.responseText;
    }
  else
  {
     document.getElementById("mytext").innerHTML = this.status;
  }
  };
  xhttp.open("POST", "/BondhoJanala/Admin/control/delmanSearch.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>
<h1>DeliveryMan Details</h1>
<body>
    <h1>View DeliveryMan</h1>

    <table>
        <hr>
         <div>   Search By Delivery Name:
      <input type="text"name="name" id="uname" > </div><br><br>

  <button name="submit" onclick="showmyuser()">Search</button>
  <button id="hide">hide</button> <button id="show">show</button>
  <hr>

<p id="mytext"></p>
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

    $userQuery=$connection->ShowAll($conobj,"deliverman");

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

      
    
$connection->CloseCon($conobj);
?>