<?php
// session_start(); 

include('control/addorderlistcheck.php');


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
			padding: 2%;
			
        
		}
		input
		{
			font-size: 15px;
			display: inline-block;
			width: 30%; 
		}

		/* input[type=radio] {
			font-size: 15px;
			display: inline-block;
			width: 5%; 
		} */

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
	<script src="Js/javascript_validation.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" onsubmit="return validateForm()" method="post">
	
		<!-- <?php  include('employee_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend" style="font-size: 30px;text-shadow:2px 2px 5px lightgreen;"><b><i>ADD ORDER LIST</i></b></legend>
			<label for="cname"><b>Customer Name:</b></label>
			<input type="text" id="cname" name="cname" value="" >
			<span id="errorname"></span><br><br>

            <label for="email"><b>Email:</b></label>
			<input type="text" id="email" name="email" value="" >
			<span id="emailErr"></span><br><br>

            <label for="address"><b>Address:</b></label>
			<input type="text" id="address" name="address" value="" >
			<span id="addressErr"></span><br><br>

            <label for="order"><b>Order Item:</b></label>
			<input type="text" id="order" name="order" value="" >
			<span id="orderErr"></span><br><br>
			
			<label for="price"><b>Price:</b></label>
			<input type="int" id="price" name="price" value="" >
			<span id="priceErr"></span><br><br>

            <label for="dob"><b>DOB:</b></label>
			<input type="date" placeholder="dd/mm/yyyy" id="dob" name="dob" value="" >
			<span id="errdob"></span><br><br>

            

			<input class="button" type="submit" name="add" value="Add Order">
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		</fieldset>
	

</form>

</body>
</html>