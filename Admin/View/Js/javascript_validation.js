
function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var address = document.getElementById("address").value;
    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");
    var position = document.getElementById("position").value;
    var dob=document.getElementById("dob").value;
    var emailRe = /^[A-Za-z0-9._]*\@[A-Za-z]*\.[A-Za-z]{2,5}$/; 
    var passRe = /[$%@#]/;
    var myDate = new Date(dob);
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

    if (position == "") {
        document.getElementById("positionErr").innerHTML = "Position can't be blank";
    }

    if(password == "" || !passRe.test(password)){
        document.getElementById("passErr").innerHTML = "Password must contain at least one of the special characters (@, #, $, %) ";
        
      }
      
      if(dob == "" || myDate > Date.now())
      {
        document.getElementById("errdob").innerHTML = " Date Of Birth is not correct ";
        document.getElementById("errdob").style.color = "red";
        return false;
      }

     if (!male.checked && !female.checked && !other.checked ) {
      document.getElementById("errorgender").innerHTML="Please fill out your gender";
       return false;
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

   function CheckPos() {
    var position =  document.getElementById("position").value;
    if (position == "") {
        document.getElementById("positionErr").innerHTML = "Position can't be blank";
        document.getElementById("positionErr").style.color = "red";
    }else{
        document.getElementById("positionErr").innerHTML = "your Position is valid";
      document.getElementById("positionErr").style.color = "black";
    }
  }

  
//   function CheckAdd() {
//     var address =  document.getElementById("address").value;
//     if (address == "") {
//         document.getElementById("addressErr").innerHTML = "Address can't be blank";
//         document.getElementById("addressErr").style.color = "red";
//     }else{
//         document.getElementById("addressErr").innerHTML = "your address is valid";
//       document.getElementById("addressErr").style.color = "black";
//     }
//   }
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

  function checkDob(){
    var dob=document.getElementById("dob").value;
    var myDate = new Date(dob);
    // var today = new Date();
   
   
        if(dob == "")
       {
         document.getElementById("errdob").innerHTML = "Select your Date Of Birth";
         document.getElementById("errdob").style.color = "red";
         return false;
       }
       else if(myDate > Date.now())
       {
         document.getElementById("errdob").innerHTML = "Future date cannot be selected";
         document.getElementById("errdob").style.color = "red";
         return false;
       }
       else{
        document.getElementById("errdob").innerHTML = "Your date is valid";
        document.getElementById("errdob").style.color = "black";
      }
   }

   function checkGender(){

    var male = document.getElementById("male");
    var female = document.getElementById("female");
    var other = document.getElementById("other");

    if (!male.checked && !female.checked && !other.checked ) {
        document.getElementById("errorgender").innerHTML="Please fill out your gender";
        document.getElementById("errorgender").style.color = "red";
         return false;
    }
    else{
        document.getElementById("errorgender").innerHTML = "You gender is fill out";
        document.getElementById("errorgender").style.color = "black";
    }

   }

   function checkImage()
   {
     var picture = document.getElementById("picture").value;
     var file_ext = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;

     //Image
     if(picture == "")
     {
       document.getElementById("errimg").innerHTML = "Image is required";
       document.getElementById("errimg").style.color = "red";
       return false;
     }
     else if(!file_ext.exec(picture))
     {
       document.getElementById("errimg").innerHTML = "Extension not allowed, please choose a JPEG or PNG or JPG file.";
       document.getElementById("errimg").style.color = "red";
       return false;
     }
     else
     {
       document.getElementById("errimg").innerHTML = "Image Extention is valid";
     }
   }


   function validateFormMenu() {
    var category = document.getElementById("category").value;
    var foodname = document.getElementById("foodname").value;
    var price = document.getElementById("price").value;
    var description = document.getElementById("description").value;
    var picture = document.getElementById("picture");
    var file_ext = /(\.jpg|\.jpeg|\.bmp|\.gif|\.png)$/i;
    
    // var myfile = document.getElementById("myfile").value;

    
    if (foodname == "" || foodname.length<4 ) {
        document.getElementById("foodnameErr").innerHTML="Please insert a valid food name";
       }

    if(category == "" || category.length<5){
        document.getElementById("categoryErr").innerHTML = " Please insert a valid food name";
 
      }

    if (price == "") {
        document.getElementById("priceErr").innerHTML = "Price can't be blank";
     
    }

    if (description == "") {
        document.getElementById("descriptionErr").innerHTML = "description can't be blank";
    }

    if(picture == "" || !file_ext.exec(picture)){
        document.getElementById("pictureErr").innerHTML = "picture can't be blank and please choose a JPEG or PNG or JPG file";
        
      }
      
  
    
  }
  
  function Checkcategory() {
    var category =  document.getElementById("category").value;
    if (category == "") {
        document.getElementById("categoryErr").innerHTML = "category can't be blank";
        document.getElementById("categoryErr").style.color = "red";
    }
    else if (category.length<5) {
      document.getElementById("categoryErr").innerHTML = "category contains at least five words";
      document.getElementById("categoryErr").style.color = "red";
   }
    else{
        document.getElementById("categoryErr").innerHTML = "your category is valid";
      document.getElementById("categoryErr").style.color = "black";
    }
  }

  function Checkfoodname() {
    var foodname =  document.getElementById("foodname").value;
    if (foodname == "") {
        document.getElementById("foodnameErr").innerHTML = "foodname can't be blank";
        document.getElementById("foodnameErr").style.color = "red";
    }
    else if (foodname.length<5) {
      document.getElementById("foodnameErr").innerHTML = "foodname contains at least five words";
      document.getElementById("foodnameErr").style.color = "red";
   }
    else{
        document.getElementById("foodnameErr").innerHTML = "your foodname is valid";
      document.getElementById("foodnameErr").style.color = "black";
    }
  }

  function Checkdescription() {
    var description =  document.getElementById("description").value;
    if (description == "") {
        document.getElementById("descriptionErr").innerHTML = "description can't be blank";
        document.getElementById("descriptionErr").style.color = "red";
    }
  //   else if (category.length<5) {
  //     document.getElementById("descriptionErr").innerHTML = "foodname contains at least five words";
  //     document.getElementById("descriptionErr").style.color = "red";
  //  }
    else{
        document.getElementById("descriptionErr").innerHTML = "your description is valid";
      document.getElementById("descriptionErr").style.color = "black";
    }
  }

  function Checkprice() {
    var price =  document.getElementById("price").value;
    if (price == "") {
        document.getElementById("priceErr").innerHTML = "price can't be blank";
        document.getElementById("priceErr").style.color = "red";
    }
  //   else if (category.length<5) {
  //     document.getElementById("descriptionErr").innerHTML = "foodname contains at least five words";
  //     document.getElementById("descriptionErr").style.color = "red";
  //  }
    else{
        document.getElementById("priceErr").innerHTML = "your price is valid";
      document.getElementById("priceErr").style.color = "black";
    }
  }

  function Checktitle() {
    var title =  document.getElementById("title").value;
    if (title == "") {
        document.getElementById("titleErr").innerHTML = "title can't be blank";
        document.getElementById("titleErr").style.color = "red";
    }
    else if (title.length<5) {
      document.getElementById("titleErr").innerHTML = "title contains at least five words";
      document.getElementById("titleErr").style.color = "red";
   }
    else{
        document.getElementById("titleErr").innerHTML = "your title is valid";
      document.getElementById("titleErr").style.color = "black";
    }
  }

  function Checkoffer() {
    var offer =  document.getElementById("offer").value;
    if (offer == "") {
        document.getElementById("offerErr").innerHTML = "offer can't be blank";
        document.getElementById("offerErr").style.color = "red";
    }
    else if (offer.length<10) {
      document.getElementById("offerErr").innerHTML = "offer contains at least ten words";
      document.getElementById("offerErr").style.color = "red";
   }
    else{
        document.getElementById("offerErr").innerHTML = "your offer is valid";
      document.getElementById("offerErr").style.color = "black";
    }
  }

  function checkdate(){
    var date=document.getElementById("date").value;
    
   
        if(date == "")
       {
         document.getElementById("dateErr").innerHTML = "date can't be blank";
         document.getElementById("dateErr").style.color = "red";
         return false;
       }
       else{
        document.getElementById("dateErr").innerHTML = "Your date is valid";
        document.getElementById("dateErr").style.color = "black";
      }
   }


  

  