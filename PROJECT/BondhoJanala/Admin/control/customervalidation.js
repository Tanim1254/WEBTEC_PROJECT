function validateForm() {
    var letter= /^[a-z]$/;
    var fname = document.getElementById("fname").value;
    var lname = document.getElementById("lname").value;
    var password = document.getElementById("password").value;
    var address = document.getElementById("address").value;
    
    
    
      if (fname == "" || fname.length<5 )  {
   document.getElementById("error").innerHTML="Please fill out first name";
    return false;
  }
   


 if ( lname == "" || lname.length<5) {
   document.getElementById("error").innerHTML="Please fill out last name";
    return false;
    
  }
  if ( password == "" || password.length<8) {
   document.getElementById("error").innerHTML="Please fill out password";
    return false;
  }
  
  if (document.getElementById("gender1").checked == false &&  document.getElementById("gender2").checked == false )
  {
    document.getElementById("error").innerHTML="Please select any radio button";
    return false;
  }
  if ( address =="") {
   document.getElementById("error").innerHTML="Please fill out car name";
    return false;
    
  }
  

  else
  {
    document.getElementById("error").innerHTML= "";
    document.getElementById("ffname").innerHTML=fname;
    document.getElementById("llname").innerHTML=lname;
    
    document.getElementById("gender").innerHTML=gender1;
    
    
    document.getElementById("ppassword").innerHTML=password;
    document.getElementById("aaddress").innerHTML=address;
    
    return false;
  }
  
  
}

