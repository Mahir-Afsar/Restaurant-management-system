<?php
require_once("connection_customer_login.php");
include('header1.php');

$db = dbConnection();
if(!$db){
  echo "DB NOT CONNECTED";
}
if(isset($_POST['email']) && isset($_POST['password'])){
  $email = $_POST['email'];
  $pass = $_POST['password'];
}
global $email;
global $pass;
?>
<!DOCTYPE html>
<html>

<head>
  <script src="../js_validation/login_validation.js"></script>
  <link rel="stylesheet" href="mycss.css">
  <title>Sign in</title>
  <style>
      .text
    {
      background-color: #5F9EA0;
      color: black;
      padding: 5px 10px;
      text-align:center;
    }

  </style>
</head>

<body>
 
      <?php  ?>
       </form>     
                
    </div>
  </section>
<meta name="viewport" content="width=device-width, initial-scale=1">
<fieldset style="width: 1000px; position:center" >
<legend class="text"><b>LOGIN</b></legend>
<form name="form_login" action="" onsubmit="return validateLoginForm()" method="post">

  <div class="imgcontainer">
    <img src="image/login.jpg" alt="Avatar" class="avatar">
  </div> 

  <div class="container">
    <b>Email Address: <input type="text" placeholder="Email address" name="mail_id" id="mail_id"  style="width: 250px" value="<?=$email;?>"><br><br>

    <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password: <?php echo "&nbsp";?> <input type="password" placeholder="Enter Password" name="login_password" id="login_password" style="width: 250px"  value="<?=$pass;?>"><br><br>
    
    <button type="submit" name="submit" style="width: 100px"><b>Login</button>

    <label>

  
    </label>
  </div>

  </div>

</fieldset>
</form>
     
</body>

</html>

<?php
  session_start();
  if(isset($_POST['submit'])){
    $email = $_POST['mail_id'];
    $pass = $_POST['login_password'];

    $sql = "select * from user where user_email_ID='$email' and user_Password='$pass'";
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) == 0){
      echo "NO USER DOUNF";
    }
    else{
      while($row = mysqli_fetch_assoc($result)){
        if($row['role']== "Admin"){
        
          $_SESSION['name_user'] = $row['user_Name'];
          $_SESSION['user_email_ID'] = $row['user_email_ID'];
          $_SESSION['user_Password'] = $row['user_Password'];
          header("location: admin_logged_page.php");    
        }
        else if($row['role']== "Employee"){
        
          $_SESSION['user_ID'] = $row['user_ID'];
          $_SESSION['name_user'] = $row['user_Name'];
          $_SESSION['user_email_ID'] = $row['user_email_ID'];
          $_SESSION['user_Password'] = $row['user_Password'];
          
          header("location: employee/employee_logged_page.php");
        }
        else if($row['role']== "User" || $row['role']== "user"){
         
          $_SESSION['user_ID'] = $row['user_ID'];
          $_SESSION['name_user'] = $row['user_Name'];
          $_SESSION['user_email_ID'] = $row['user_email_ID'];
          $_SESSION['user_Password'] = $row['user_Password'];
          header("location:customer_view.php");
        }
      }
      
    }
  }
  
?>