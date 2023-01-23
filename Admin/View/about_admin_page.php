<?php
// session_start(); 

// include('control/addemployeecheck.php');


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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script> 
    $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
    });
    </script>
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
        #panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}
	</style>
	<!-- <link rel="stylesheet" href="css/mystyle.css"> -->
	<!-- <script src="Js/javascript_validation.js"></script> -->
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>"  method="post">
	
		<!-- <?php  include('admin_logged_page.php'); ?> -->
		<fieldset class="fieldset">
			<br>
			<!-- <legend class="legend"><b>ABOUT ADMIN</b></legend> -->
            <div id="flip">Here are the things the Admin can do</div>
            <div id="panel">
                Admin can Add Employee
                <br><br>
                Admin can View,Search,Update and Delete employee information
                <br><br>
                Admin can Add Menu Item
                <br><br>
                Admin can View,Search,Update and Delete Menu item
                <br><br>
                Admin can also Upload offer item
            </div>
                    
		</fieldset>
	

</form>

</body>
</html>