<?php 
 
	// require_once 'controller/functions.php';
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGGED in as <?php echo $_SESSION['name_user'] ?></title>
	<style>	
		/* .navbar
		{
			width: 12%;
			float: left;
			display: block;
			background:#50adfa;
			padding-top: 100px;
			padding-bottom: 28%;
		}
		.navbar h3
		{
			font-family: Arial, Helvetica, sans-serif;
			margin-left: 10%;

		} */
	</style>
	<link rel="stylesheet" href="css/logged.css">
</head>
<body>
	<?php include('outlay.php'); ?>
	<div>
		<?php if (isset($_SESSION["name_user"])) : ?>
		<aside class="navbar">
			<a href="add_employee_page.php"><h3>Add Employee</h3></a>
			<a href="view_employee_page.php"><h3>View Employee</h3></a>
			<a href="update_employee_page.php"><h3>Update Employee</h3></a>
			<a href="add_menu_page.php"><h3>Add Menu</h3></a>
			<a href="update_menu_page.php"><h3>Update Menu</h3></a>
			<a href="view_menu_page.php"><h3>View Menu</h3></a>
			<a href="add_offer_page.php"><h3>Special Offer</h3></a>
			<a href="about_admin_page.php"><h3>About Admin</h3></a>

			</aside>
		<?php else:?>
			<?php header('Location: login.php');?>
		<?php endif; ?>
	</div>
	
	

</body>
</html>