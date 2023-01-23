<?php
//   session_start(); 

  include('control/updateEmployee.php');


//   if(empty($_SESSION["username"])) // Destroying All Sessions
//   {
//     header("Location: ../control/login.php"); // Redirecting To Home Page
//   }
   
?>
<?php  include('admin_logged_page.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGGED in as <?php echo $_SESSION['name_user'] ?></title>
	<style>
		/* .fieldset label
		{
			font-size: 15px;
			display: inline-block;
			width: 30%;
			text-align: center;
			padding: 1%; 
        
		}
		input
		{
			font-size: 15px;
			display: inline-block;
			width: 30%; 
		}

		input[type=radio] {
			font-size: 15px;
			display: inline-block;
			width: 5%; 
		}

		input[type=submit] {
			font-size: 15px;
			display: inline-block;
			width: 20%; 
			text-align: center;
		}
		.error
		{
			color: red;
		} */

	</style>
		<link rel="stylesheet" href="css/mystyle.css">
		<script src="Js/javascript_validation.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	
		<!-- <?php  include('admin_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend"><b>UPDATE EMPLOYEE</b></legend>

            <label for="srch_username"><b>Search Employee by name:</b></label>
			<input type="text" id="srch_username" name="srch_username" value="" >
            <input name='search' type='submit' value='search'> <br>

			<!-- <label for="name"><b>User Name:</b></label> -->
			<input type="hidden" id="name" name="name" onkeyup="CheckName()" onblur="CheckName()" value="<?php echo $name; ?>">

            <label for="email"><b>Email:</b></label>
			<input type="text" id="email" name="email" onkeyup="CheckMail()" onblur="CheckMail()" value="<?php echo $email; ?>" >
			<span id="emailErr"></span><br>

            <label for="address"><b>Address:</b></label>
			<input type="text" id="address" name="address" onkeyup="CheckAdd()" onblur="CheckAdd()" value="<?php echo $address; ?>" >
			<span id="addressErr"></span><br>

            <label for="position"><b>Position:</b></label>
			<input type="text" id="position" name="position" onkeyup="CheckPos()" onblur="CheckPos()" value="<?php echo $position; ?>" >
            <span id="positionErr"></span><br>

			<label for="password"><b>Password:</b></label>
			<input type="Password" id="password" name="password" onkeyup="CheckPass()" onblur="CheckPass()" value="<?php echo $password; ?>">
			<span id="passErr"></span><br>

            <label for="dob"><b>DOB:</b></label>
			<input type="date" placeholder="dd/mm/yyyy" id="dob" name="dob" onkeyup="checkDob()" onblur="checkDob()" value="<?php echo $dob; ?>">
			<span id="errdob"></span><br>

            <label for="gender"><b>Gender:</b></label>
            <input type='radio' name='gender' value='female'<?php echo $radio1; ?>>Female 
            <input type='radio' name='gender' value='male'<?php echo $radio2; ?> >Male     
            <input type='radio' name='gender' value='other'<?php echo $radio3; ?> > Other 
			<span id="errorgender"></span><br><br>

			<!-- <input class="button" type="submit" name="add" value="Add Employee"> -->
            <input class="button" name='update' type='submit' value='Update'>
            <input class="button" name='delete' type='submit' value='Delete'>    
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
			<?php echo $errorinfo;?>
		</fieldset>
	

</form>

</body>
</html>