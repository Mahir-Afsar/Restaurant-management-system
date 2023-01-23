<?php
// session_start(); 

include('control/addemployeecheck.php');


// if(empty($_SESSION["name_user"])) // Destroying All Sessions
// {
// header("Location: login.php"); // Redirecting To Home Page
// }

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
			width: 30%; 
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
<form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateForm()" method="post">
	
		<!-- <?php  include('admin_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend"><b>ADD EMPLOYEE</b></legend>
			<label for="name"><b>User Name:</b></label>
			<input type="text" id="name" name="name" onkeyup="CheckName()" onblur="CheckName()" value="" >
			<span id="errorname"></span><br>

            <label for="email"><b>Email:</b></label>
			<input type="text" id="email" name="email" onkeyup="CheckMail()" onblur="CheckMail()" value="" >
			<span id="emailErr"></span><br>

            <label for="address"><b>Address:</b></label>
			<input type="text" id="address" name="address" onkeyup="CheckAdd()" onblur="CheckAdd()" value="" >
			<span id="addressErr"></span><br>

            <label for="position"><b>Position:</b></label>
			<input type="text" id="position" name="position" onkeyup="CheckPos()" onblur="CheckPos()" value="" >
            <span id="positionErr"></span><br>
			
			<label for="password"><b>Password:</b></label>
			<input type="Password" id="password" name="password" onkeyup="CheckPass()" onblur="CheckPass()" value="">
			<span id="passErr"></span><br>

            <label for="dob"><b>DOB:</b></label>
			<input type="date" placeholder="dd/mm/yyyy" id="dob" name="dob" onkeyup="checkDob()" onblur="checkDob()" value="" >	
			<span id="errdob"></span><br>

            <label for="gender"><b>Gender:</b></label>
            <input type='radio' id="female" name='gender' value='female' >Female 
            <input type='radio' id="male" name='gender' value='male' >Male     
            <input type='radio' id="other" name='gender' value='other' > Other 
			<span id="errorgender"></span><br>

			<input class="button" type="submit" name="add" value="Add Employee">
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		</fieldset>
	

</form>

</body>
</html>