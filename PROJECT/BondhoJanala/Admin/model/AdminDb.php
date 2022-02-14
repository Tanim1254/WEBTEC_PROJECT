<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "admin";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
function ValidateLogin($conn, $table, $username, $password)
{



$result = $conn->query("SELECT Username,Password FROM $table WHERE Username='$username' and Password = '$password'");

return $result;
}

 function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
 }

 function InsertAdmin($conn,$table,$username,$password,$email,$phone)
 {
     $sql = "INSERT INTO registeradmin (Username,Password,Email,MobileNo) VALUES('$username','$password','$email','$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "CONGRATS YOU ARE REGISTERED";
        header("location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
 }
 function UpdateProfile($conn,$table,$username,$password,$email,$phone)
 {
     $result =$conn->query( "UPDATE registeradmin set Username='$username',Password='$password',Email='$email',MobileNo='$phone'WHERE Username='$username'");
     $error = "";
if ($conn->query($result) === TRUE) {
return $result . $error;
} else {
$error = "Error: " . $result . "<br>" . $conn->error;
}

   
    
 }
 function ShowP($conn, $table, $username)
{
$result = $conn->query("SELECT * FROM $table WHERE Username='$username' ");
return $result;
}

function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>