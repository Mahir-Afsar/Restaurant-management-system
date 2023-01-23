function validateRegForm() {
  var name = document.getElementById("name").value;
  var email = document.getElementById("email").value;
  var password = document.getElementById("password").value;
  var address = document.getElementById("address").value;
 
  var phone = document.getElementById("phone").value;
  var cpassword=document.getElementById("confirmpassword").value;
  var emailRe = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/; 
  var passRe = /[$%@#]/;

  // var myfile = document.getElementById("myfile").value;

  
  if (name == "" || name.length<4 ) {
      document.getElementById("errorname").innerHTML="Please insert a valid name";
     }

  if(email == "" || !emailRe.test(email)){
      document.getElementById("emailErr").innerHTML = " Invalid email format. Format: example@something.com";

    }

  if (address == "") {
      document.getElementById("addressErr").innerHTML = "Address can't be blank";
   
  }

  if (phone == "") {
      document.getElementById("phoneErr").innerHTML = "Position can't be blank";
  }

  if(password == "" || !passRe.test(password)){
      document.getElementById("passErr").innerHTML = "Password must contain at least one of the special characters (@, #, $, %) ";
      
    }
    
  if ( cpassword== "" || cpassword != password) {
      document.getElementById("cpassErr").innerHTML = " Confirm password can't be blank and Must match with password";
      // document.getElementById("cpassErr").style.color = "red";
  }


  
}



function CheckName() {
    var name = document.getElementById("name").value;
    var nameRe = /^[a-zA-Z-' ]*$/;
    if (name == "") {
      document.getElementById("errorname").innerHTML="Please insert a valid name";
      document.getElementById("errorname").style.color = "red";
     }
     else if(name.length<4){
      document.getElementById("errorname").innerHTML = "Name contains at least four words";
      document.getElementById("errorname").style.color = "red";
     }
     else if(!nameRe.test(name)){
      document.getElementById("errorname").innerHTML = " Only letters and white space allowed";
      document.getElementById("errorname").style.color = "red";
    }
     else
     {
      document.getElementById("errorname").innerHTML="your name is valid";
      document.getElementById("errorname").style.color = "black";

     }
  }

  function CheckMail() {
    var email =  document.getElementById("email").value;
    var emailRe = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/; 
    if (email == "") {
         document.getElementById("emailErr").innerHTML = "Email can't be blank";
         document.getElementById("emailErr").style.color = "red";
     }else if(!emailRe.test(email)){
       document.getElementById("emailErr").innerHTML = " Invalid email format. Format: example@something.com";
       document.getElementById("emailErr").style.color = "red";

     }else{
       document.getElementById("emailErr").innerHTML = "your email is valid";
       document.getElementById("emailErr").style.color = "black";
     }
   }

   function CheckPhone() {
    var phone =  document.getElementById("phone").value;
    // var phoneRe = /^\d{10}$/; 
    if (phone == "") {
         document.getElementById("phoneErr").innerHTML = "Phone number can't be blank";
         document.getElementById("phoneErr").style.color = "red";
     }
     else if(phone==strlen($phone)!=11){
       document.getElementById("phoneErr").innerHTML = " Phone number must be contain 11 number";
       document.getElementById("phoneErr").style.color = "red";
     }
     else{
       document.getElementById("phoneErr").innerHTML = "your phone number is valid";
       document.getElementById("phoneErr").style.color = "black";
     }
   }

   function CheckAdd() {
    var address =  document.getElementById("address").value;
    if (address == "") {
        document.getElementById("addressErr").innerHTML = "Address can't be blank";
        document.getElementById("addressErr").style.color = "red";
    }else{
        document.getElementById("addressErr").innerHTML = "your address is valid";
      document.getElementById("addressErr").style.color = "black";
    }
  }

  function CheckPass() {
    var password =  document.getElementById("password").value;
    var passRe = /[$%@#]/;
    if (password == "") {
        document.getElementById("passErr").innerHTML = "Password can't be blank";
        document.getElementById("passErr").style.color = "red";
    }else if(!passRe.test(password)){
      document.getElementById("passErr").innerHTML = "Password must contain at least one of the special characters (@, #, $, %) ";
      document.getElementById("passErr").style.color = "red";
    }else if(password.length<5){
      document.getElementById("passErr").innerHTML = " Password must not be less than five characters ";
      document.getElementById("passErr").style.color = "red";
    
    }else{
      document.getElementById("passErr").innerHTML = "Your password is valid";
      document.getElementById("passErr").style.color = "black";
    }
  }

  function CheckCpass() {
    var password = document.getElementById("password").value;
    var cpassword = document.getElementById("confirmpassword").value;

    if ( cpassword== "") {
        document.getElementById("cpassErr").innerHTML = " Confirm password can't be blank";
        document.getElementById("cpassErr").style.color = "red";
    }else if(cpassword != password){
      document.getElementById("cpassErr").innerHTML = " Must match with password";
      document.getElementById("cpassErr").style.color = "red";
    }else{
      document.getElementById("cpassErr").innerHTML = "Password match done";
      document.getElementById("cpassErr").style.color = "black";
    }
  }