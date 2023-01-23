<?php
//   session_start(); 

  include('control/updateOrderlist.php');


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
            /* background-color: white; */
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

		/* input[type=radio] {
			font-size: 15px;
			display: inline-block;
			width: 5%; 
		} */

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
			<legend class="legend" style="font-size:30px; text-shadow:2px 2px 5px green;"><b><i>SEARCH ORDER LIST</i></b></legend>

            <label for="srch_username"><b>Search Order List by Customer Name:</b></label>
			<input type="text" id="srch_username" name="srch_username" value="" >
            <input name='search' type='submit' value='search'> <br>

			<!-- <label for="name"><b>User Name:</b></label> -->
			<input type="hidden" id="cname" name="cname" value="<?php echo $cname; ?>"><br>

            <label for="email"><b>Email:</b></label>
			<input type="text" id="email" name="email" value="<?php echo $email; ?>" ><br>

            <label for="address"><b>Address:</b></label>
			<input type="text" id="address" name="address" value="<?php echo $address; ?>" ><br>

            <label for="order"><b>Order Item:</b></label>
			<input type="text" id="order" name="order" value="<?php echo $order; ?>" ><br>
            
			<label for="price"><b>price:</b></label>
			<input type="int" id="price" name="price" value="<?php echo $price; ?>"><br>

            <label for="dob"><b>DOB:</b></label>
			<input type="date" placeholder="dd/mm/yyyy" id="dob" name="dob" value="<?php echo $dob; ?>"><br>

            
			<!-- <input class="button" type="submit" name="add" value="Add Employee"> -->
            <!-- <br><input class="button" name='update' type='submit' value='Update'> -->
            <br><br><input class="button" name='delete' type='submit' value='Delete'>    
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		</fieldset>
	

</form>

</body>
</html>