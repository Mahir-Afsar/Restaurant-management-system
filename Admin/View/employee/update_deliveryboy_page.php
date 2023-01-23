<?php
//   session_start(); 

  include('control/updateDeliveryboy.php');


//   if(empty($_SESSION["username"])) // Destroying All Sessions
//   {
//     header("Location: ../control/login.php"); // Redirecting To Home Page
//   }
   
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
			width: 20%; 
			text-align: center;
		}
		.error
		{
			color: red;
		}

	</style>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
	
		<!-- <?php  include('employee_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend" style="font-size:30px; text-shadow:2px 2px 5px green;"><b><i>UPDATE DELIVERY BOY</i></b></legend>

            <label for="srch_username"><b>Search Delivery Boy by name:</b></label>
			<input type="text" id="srch_username" name="srch_username" value="" >
            <input name='search' type='submit' value='search'> <br>

			<!-- <label for="name"><b>User Name:</b></label> -->
			<input type="hidden" id="tname" name="tname" value="<?php echo $tname; ?>"><br>

            <label for="email"><b>Email:</b></label>
			<input type="text" id="email" name="email" value="<?php echo $email; ?>" ><br>

            <label for="address"><b>Address:</b></label>
			<input type="text" id="address" name="address" value="<?php echo $address; ?>" ><br>

            <label for="phone"><b>Phone:</b></label>
			<input type="text" id="phone" name="phone" value="<?php echo $phone; ?>" ><br>
            
			
            <label for="dob"><b>DOB:</b></label>
			<input type="date" placeholder="dd/mm/yyyy" id="dob" name="dob" value="<?php echo $dob; ?>"><br>

            <label for="shift"><b>Shift:</b></label>
			<input type="text" id="shift" name="shift" value="<?php echo $shift; ?>"><br>

            <label for="availability"><b>Availability:</b></label>
			<input type="text" id="availability" name="availability" value="<?php echo $availability; ?>"><br>



			<!-- <input class="button" type="submit" name="add" value="Add Employee"> -->
            <input class="button" name='update' type='submit' value='Update'><br><br>
            <input class="button" name='delete' type='submit' value='Delete'>    
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		</fieldset>
	

</form>

</body>
</html>