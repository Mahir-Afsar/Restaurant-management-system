<?php
// session_start(); 

include('control/addmenucheck.php');


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
	<!-- <style>
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

	</style> -->
	<link rel="stylesheet" href="css/mystyle.css">
	<script src="Js/javascript_validation.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" onsubmit="return validateFormMenu()">
	
		<!-- <?php  include('admin_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend"><b>ADD MENU</b></legend>
			<label for="category"><b>Food Category:</b></label>
			<input type="text" id="category" name="category" onkeyup="Checkcategory()" onblur="Checkcategory()" value="">
			<span id="categoryErr"></span><br>

            <label for="foodname"><b>Food Name:</b></label>
			<input type="text" id="foodname" name="foodname" onkeyup="Checkfoodname()" onblur="Checkfoodname()" value="" >
			<span id="foodnameErr"></span><br>

            <label for="price"><b>Food Price:</b></label>
			<input type="number" id="price" name="price" onkeyup="Checkprice()" onblur="Checkprice()" value="" >
			<span id="priceErr"></span><br>

            <label for="description"><b>Food Description:</b></label>
            <textarea id="description" name="description" rows="4" cols="30" onkeyup="Checkdescription()" onblur="Checkdescription()"></textarea>
			<span id="descriptionErr"></span><br>

            <label for="picture"><b>Food Image:</b></label>
			<input type="file" id="picture" name="picture" onkeyup="checkImage()" onblur="checkImage()" value="" >
			<span id="errimg"></span><br>

			<input class="button" type="submit" name="add" value="Add Menu">
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		</fieldset>
	

</form>

</body>
</html>