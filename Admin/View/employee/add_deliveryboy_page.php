<?php
// session_start(); 

include('control/adddeliveryboycheck.php');


// if(empty($_SESSION["name_user"])) // Destroying All Sessions
// {
// header("Location: login.php"); // Redirecting To Home Page
// }

?>
<?php  include('employee_logged_page.php'); ?>


<!DOCTYPE html>
<html>
<head>
	<title>LOGGED in as <?php echo $_SESSION['name_user'] ?></title>
	<style>
		.fieldset label
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
		}
		
	</style>
		<script src="Js/delivery_validation.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateForm()" method="post">
	
		<!-- <?php  include('employee_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend" style="font-size: 30px;text-shadow:2px 2px 5px lightgreen;"><b><i>ADD DELIVERY BOY</i></b></legend>
			<label for="tname"><b>Name:</b></label>
			<input type="text" id="tname" name="tname" value="" >
			<span id="errorname"></span><br><br><br>

            <label for="email"><b>Email:</b></label>
			<input type="text" id="email" name="email" value="" >
			<span id="emailErr"></span><br><br><br>

            <label for="address"><b>Address:</b></label>
			<input type="text" id="address" name="address" value="" >
			<span id="addressErr"></span><br>

            <label for="phone"><b>Phone:</b></label>
			<input type="text" id="phone" name="phone" value="" >
			<span id="phnErr"></span><br>			

            <label for="dob"><b>DOB:</b></label>
			<input type="date" placeholder="dd/mm/yyyy" id="dob" name="dob" value="" >
			<span id="errdob"></span><br>

            <label for="shift"><b>Shift:</b></label>
			<input type="text" id="shift" name="shift" value="">
			<span id="shiftErr"></span><br>

            <label for="availability"><b>Availability:</b></label>
			<input type="text" id="availability" name="availability" value="">
			<span id="availErr"></span><br><br><br>

			<input class="button" type="submit" name="add" value="Add Delivery Boy">
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		</fieldset>
	

</form>

</body>
</html>