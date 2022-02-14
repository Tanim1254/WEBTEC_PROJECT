<?php
session_start(); 
if(empty($_SESSION["username"])) 
{

header("Location: ../view/login.php"); 
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Search Product</title>
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
  xhttp.open("POST", "/BondhoJanala/Admin/control/ProductSearch.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("uname="+uname);


}

</script>
</head>
  
</head>
   

<body>
  <legend>
    <hr>
    <h1>Serach Product </h1>
    <div id="p">
    Search By Product Name:
      <input type="text"name="name" id="uname" ><br><br> </div>

  <button name="submit" onclick="showmyuser()">Search</button><button>Hide</button>
  <hr>

<p id="mytext"></p>

    
  </legend>
  

</body>
</html>