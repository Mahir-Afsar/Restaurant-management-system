<?php 
 
	// require_once 'controller/functions.php';
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGGED in as <?php echo $_SESSION['name_user'] ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideDown("slow");
  });
});
</script>
	<style>	
		/* .navbar
		{
			width: 20%;
			display: inline-block;
  			width: 150px;
  			height: 150px;
  			border: 3px solid blue;    
			background:#bf80ff;
			padding-top: 150px;
			padding-bottom: 30%;
			padding-right: 100px;

			
			

		}
		.navbar h3
		{
			font-family: Arial, Helvetica, sans-serif;
			margin-left: 25%;
		


		} */

		
		

		div.navbar {
			text-align: center;
  border: 3px solid black;
  margin-top: 30px;
  margin-bottom: 30px;
  margin-right: 150px;
  margin-left: 80px;
  background-color: #bf80ff;
  color: black;
}

		


	</style>
</head>
<body>
	<?php include('outlay.php'); ?>
	
	<div>
	
		<?php if (isset($_SESSION["name_user"])) : ?> 
			<br> <br> <br> <br> <br> <br> <br> <br> <br>
			
			<div id="flip" style="font-size: 150%;"><b>WELCOME</b></div>
	<div id="panel" style="font-size: 200%;"><b><i>Hello! Ishrat Jahan</i><br>This is your page</b></div>
			
			
		<div class="navbar">
		
			<a href="add_orderlist_page.php"><h3>Add Order List</h3></a>
			<a href="view_orderlist_page.php"><h3>View Order List</h3></a>
			<a href="update_orderlist_page.php"><h3>Search Order List</h3></a>
			<a href="add_deliveryboy_page.php"><h3>Add Delivery Boy</h3></a>
			<a href="view_deliveryboy_page.php"><h3>View Delivery Boy List</h3></a>
			<a href="update_deliveryboy_page.php"><h3>Update Delivery Boy</h3></a>
		
		</div>
			
			
			
			
		<?php else:?>
			<?php header('Location: login.php');?>
		<?php endif; ?>
		</div>
	
	
	

</body>
</html>