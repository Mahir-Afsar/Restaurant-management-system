
function validateForm() {
    var tname = document.getElementById("tname").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;
    var shift = document.getElementById("shift").value;
    var phone = document.getElementById("phone").value;
    var dob=document.getElementById("dob").value;
    var availability = document.getElementById("availability").value;
    var emailRe = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/; 
    var passRe = /[$%@#]/;
    var myDate = new Date(dob);
    // var myfile = document.getElementById("myfile").value;

    
    if (tname == "" || tname.length<4 ) {
        document.getElementById("errorname").innerHTML="Please insert a valid name";
       }

    if(email == "" || !emailRe.test(email)){
        document.getElementById("emailErr").innerHTML = " Invalid email format. Format: example@something.com";
 
      }

    if (address == "") {
        document.getElementById("addressErr").innerHTML = "Address can't be blank";
     
    }

    if (shift == "") {
        document.getElementById("shiftErr").innerHTML = "Shift can't be blank";
    }

    if (phone == "") {
      document.getElementById("phnErr").innerHTML = "Phone number can't be blank";
  }
      
    if(dob == "" || myDate > Date.now())
      {
        document.getElementById("errdob").innerHTML = " Date Of Birth is not correct ";
        return false;
      }

      if (availability == "") {
        document.getElementById("availErr").innerHTML = "Availability can't be blank";
        return false;
    }
  
    
  }






  

  