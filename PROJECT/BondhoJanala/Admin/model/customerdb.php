<?php
class db{
 
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "admin";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
 
 return $conn;
 }
 
 function InsertCustomer($conn,$table,$fname,$lname,$password,$gender,$address)
 {
     $sql = "INSERT INTO customer (fname,lname,password,gender,address) VALUES('$fname','$lname','$password','$gender','$address')";

    if ($conn->query($sql) === TRUE) {
        echo "CONGRATS customer added successfully";

        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
   
  function ShowAll($conn,$table)
 {
$result = $conn->query("SELECT * FROM  $table");
 return $result;
}
 function SearchUsername($conn,$table,$fname)
 {
$result = $conn->query("SELECT * FROM  $table  WHERE fname='$fname'");
 return $result;
 }

 function UpdateCustomer($conn,$table,$fname,$updated_fname,$updated_lname,$updated_password,$updated_address)
 {
     $sql = "UPDATE $table SET fname='$updated_fname',lname='$updated_lname', password='$updated_password',address='$updated_address' WHERE fname='$fname'";

    if ($conn->query($sql) === TRUE) {
        $result= TRUE;
    } else {
        $result= FALSE ;
    }
    return  $result;
 }

 function DeleteTutor($conn,$table,$fname)
 {
   $result=$conn->query("DELETE FROM $table WHERE fname='$fname'");
 }

function CloseCon($conn)
   {
      $conn -> close();
   }



}

?>