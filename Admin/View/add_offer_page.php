<?php
// session_start(); 

include('control/addoffercheck.php');


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
	<!-- <link rel="stylesheet" href="css/mystyle.css"> -->
	<script src="Js/javascript_validation.js"></script>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data" onsubmit="return validateFormMenu()">
	
		<!-- <?php  include('admin_logged_page.php'); ?> -->
    <fieldset class="fieldset">
	<br>
	
    <legend class="legend"><b>UPLOAD OFFER</b></legend>

    <table width="70%">
      <tr>
        <td>Title</td>
        <td>:</td>
        <!-- <td><input name="title" type="text" id="title"></td> -->
		<td><textarea name="title" id="title" rows="3" cols="40" onkeyup="Checktitle()" onblur="Checktitle()"></textarea></td>
        <td><span id="titleErr"></span></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
      <tr>
        <td>Details Offer</td>
        <td>:</td>
        <td><textarea name="offer" id="offer" rows="4" cols="50" onkeyup="Checkoffer()" onblur="Checkoffer()"></textarea></td>
        <td><span id="offerErr"></span></td>
      </tr>

      <tr><td colspan="4"><hr/></td></tr>
        
      <tr>
        <td>Date</td>
        <td>:</td>
        <td><input type="date" placeholder="dd/mm/yyyy" id="date" name="date" onkeyup="checkdate()" onblur="checkdate()" value="" >	</td>
        <td><span id="dateErr"></span></td>
      </tr>
      
      <tr><td colspan="4"><hr/></td></tr>
     
    </table>

    <input class="button" type="submit" name="add" value="Add Offer">
        
        
    </fieldset>
	

</form>

</body>
</html>