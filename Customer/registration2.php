<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="registrationcss.css">
  <title>Sign up</title>
<script src="../js_validation/registration_validation.js"></script>
</head>

<body>

<?php 
$userRole= 'Employee' ;
?>

 <?php include '../php_validation/user_registration_validation.php';?>

  <!-- <section class="parent"> -->
  	<!-- <div></div> -->
  	<!-- <div class="main"> -->
    <!-- <p class="sign" align="center">Sign Up!</p> -->
    <!-- <p align="center"> <a href="registration2.php">You are a travel agency? CLick here to register</a></p> -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return validateRegForm()">
    	<!-- <div align="center"> -->
      <div class="container">
      <h1>Register</h1>
     <p>Please fill in this form to create an account.</p>
     <hr>
	
      <!-- Name <input class="un" type="text" name="name" id="name" align="center" placeholder="name" value="<?php echo $name;?>"> -->
      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" id="name" onkeyup="CheckName()" onblur="CheckName()" value="<?php echo $name;?>" required>
      <!-- <span class="error">* <?php echo $nameErr;?></span> -->
      <span id="errorname"></span>
     <br>
      <!-- Email <input class="un" type="text" name="email" id="email" align="center" placeholder="email" value="<?php echo $email;?>"> -->
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" onkeyup="CheckMail()" onblur="CheckMail()" value="<?php echo $email;?>" required>
      <!-- <span class="error">* <?php echo $emailErr;?></span>     -->
      <span id="emailErr"></span>
      <br>
      <!-- Phone <input class="un" type="text" name="phone" id="phone" align="center" placeholder="phone" value="<?php echo $phone;?>"> -->
      <label for="phone"><b>Phone</b></label>
      <input type="text" placeholder="Enter phone" name="phone" id="phone" onkeyup="CheckPhone()" onblur="CheckPhone()" value="<?php echo $phone;?>" required>
      <!-- <span class="error">* <?php echo $phoneErr;?></span>
      <br> -->
      <span id="phoneErr"></span>
      <br>
      <!-- Adress <input class="un" type="text" name="address" id="address" align="center" placeholder="name" value="<?php echo $address;?>"> -->
      <label for="address"><b>Address</b></label>
      <input type="text" placeholder="Enter Address" name="address" id="address" onkeyup="CheckAdd()" onblur="CheckAdd()" value="<?php echo $address;?>" required>
      <!-- <span class="error">* <?php echo $addressErr;?></span>    
      <br>
      <br> -->
      <span id="addressErr"></span>
      <br>

      <!-- Password<input class="pass" type="password" name="password" id="password" align="center" placeholder="Password" value="<?php echo $password;?>"> -->
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="password" onkeyup="CheckPass()" onblur="CheckPass()" value="<?php echo $password;?>" required>
      <!-- <span class="error">* <?php echo $passwordErr;?></span> -->
      <!-- <br> -->
      <span id="passErr"></span>
      <br>
      <!-- Confirm Password <input class="pass" type="password" name="confirmpassword" id="confirmpassword" align="center" placeholder="Confirm Password" value="<?php echo $confirmpassword;?>"> -->
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="confirmpassword" id="confirmpassword" onkeyup="CheckCpass()" onblur="CheckCpass()" value="<?php echo $confirmpassword;?>" required>
      <!-- <br>
      <span class="error">* <?php echo $confirmpasswordErr;?></span>  
      <br>
      <br> -->
      <span id="cpassErr"></span>
      <br>
  
      <input  class="registerbtn" type="submit"  name="submit" value="Sign in">
      <!-- <button type="submit" class="submit">Register</button> -->
     </div>
      <!-- <a href="login.php" class="sub"style="position:absolute; 50px; left:440px">login</a> -->
      <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>  

  <!-- <div class="container signin">
    <p>Are you an employee? <a href="registration2.php">Employee sign up</a>.</p>
  </div>   -->
    </form>

  
       </div>     
          <br> <br>     
    
  </section>

  <?php include '../Model/connection_user_registration.php';?>
     
</body>

</html>