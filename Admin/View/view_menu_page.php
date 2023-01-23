<?php
// session_start(); 

// include('control/getmenu.php');


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
    <script>
function showmymenu() {
  var category=  document.getElementById("category").value;
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("mytext2").innerHTML = this.responseText;
    }
	else
	{
		 document.getElementById("mytext2").innerHTML = this.status;
	}
  };
  xhttp.open("POST", "/Final/Admin/View/control/getmenu.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("category="+category);


}
    </script>
</head>
<body>
<!-- <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post" enctype="multipart/form-data"> -->
	
		<!-- <?php  include('admin_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<legend class="legend"><b>VIEW MENU</b></legend>
			<!-- <label for="category"><b>Food Category:</b></label>
			<input type="text" id="category" name="category" value="" ><br>

            <label for="foodname"><b>Food Name:</b></label>
			<input type="text" id="foodname" name="foodname" value="" ><br>

            <label for="price"><b>Food Price:</b></label>
			<input type="number" id="price" name="price" value="" ><br>

            <label for="description"><b>Food Description:</b></label>
            <textarea id="description" name="description" rows="4" cols="30"></textarea><br>

            <label for="picture"><b>Food Image:</b></label>
			<input type="file" id="picture" name="picture" value="" ><br>

			<input class="button" type="submit" name="add" value="Add Menu"><br> -->
			<!-- <span style="display: inline"><input class="button" type="submit" name="delete" value="Delete"></span> -->
		
            <label>find detail of food </label>

            <input type="text" id="category" >
            <button onclick="showmymenu()">Search</button>

            <p id="mytext2"></p>
        </fieldset>
	

</form>

</body>
</html>