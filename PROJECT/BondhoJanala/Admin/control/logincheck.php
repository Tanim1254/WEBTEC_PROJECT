
<?php
session_start();
include('../model/AdminDb.php');
$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$username = $_REQUEST["username"];
$password = $_REQUEST["password"];
//json file hndling
$current_data = file_get_contents('../model/json/admin_data.json');  
                $array_data = json_decode($current_data, true);  
                $extra = array( 
                     'Username'                  =>     $_POST['username'],  
                     'password'              =>     $_POST['password'] 
                    
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data,JSON_PRETTY_PRINT);  
                if(file_put_contents('../model/json/admin_data.json', $final_data))  
                {  
                     $message = "<label class='text-success'>File Appended Success fully</p>";  
                }  
             
           else  
           {  
                $error = 'JSON File not exits';  
           }
//end json file 

if (empty($username) || empty($password)) {
$error = "All fields are required";
} 

 else {
$connection = new db();
$conobj = $connection->OpenCon();
$userQuery = $connection->ValidateLogin($conobj, "registeradmin", $username, $password);
if ($userQuery->num_rows > 0) {
$row = mysqli_fetch_assoc($userQuery);

$_SESSION["username"] = $row['Username'];
$_SESSION["password"] = $row['Password'];




header("location: pageone.php");

} 
else {
$error = "Username or password is invalid otherwise you can register";
}
$connection->CloseCon($conobj);
}
}




