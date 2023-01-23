<?php
// session_start(); 

include('control/updatemenucheck.php');


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
<form action="<?php echo $_SERVER["PHP_SELF"];?>"  method="post" enctype="multipart/form-data">
	
		<!-- <?php  include('admin_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend"><b>UPDATE MENU</b></legend>

            <label for="srch_username"><b>Search menu by category:</b></label>
			<input type="text" id="srch_username" name="srch_username" value="" >
            <input name='search' type='submit' value='search'> <br>

			<!-- <label for="category"><b>Food Category:</b></label> -->
			<input type="hidden" id="category" name="category" value="<?php echo $category; ?>" ><br>

            <label for="foodname"><b>Food Name:</b></label>
			<input type="text" id="foodname" name="foodname" value="<?php echo $foodname; ?>" onkeyup="Checkfoodname()" onblur="Checkfoodname()"  >
			<span id="foodnameErr"></span><br>

            <label for="price"><b>Food Price:</b></label>
			<input type="number" id="price" name="price"  value="<?php echo $price; ?>" onkeyup="Checkprice()" onblur="Checkprice()">
			<span id="priceErr"></span><br>

            <label for="description"><b>Food Description:</b></label>
            <textarea id="description" name="description" rows="4" cols="30" onkeyup="Checkdescription()" onblur="Checkdescription()"><?php echo $description; ?></textarea>
			<span id="descriptionErr"></span><br>

            <label for="picture"><b>Food Image:</b></label>
			<input type="file" id="picture" name="picture" onkeyup="checkImage()" onblur="checkImage()" value="<?php echo $picture; ?>" >
			<span id="errimg"></span><br>

            <input class="button" name='update' type='submit' value='Update'>
			<input class="button" name='delete' type='submit' value='Delete'>   
            <!-- <input class="button" type="submit" name="add" value="Add Menu"> -->

			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		</fieldset>
	

</form>

</body>
</html>