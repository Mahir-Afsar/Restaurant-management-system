<?php
// session_start(); 

include('control/showemployeecheck.php');


// if(empty($_SESSION["username"])) // Destroying All Sessions
// {
// header("Location: ../control/login.php"); // Redirecting To Home Page
// }

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllEmployee($conobj,"employee");
?>
<!DOCTYPE html>
<html>
<head>
	<title>VIEW EMPLOYEE</title>
	<style>
		/* .client
		{
			font-family: Arial, Helvetica, sans-serif;
			position: relative;
			top:80px;
			width: 70%;
			text-align: center;
			margin-left: 15%;
			border-collapse: collapse;
			padding: 2%;
		}
		.client th,td
		{
			border: 2px solid ;
			padding:2%;
			border-collapse: collapse;

		}
		.client th
		{
			font-size: 20px;
		} */
			.client th,td
		{
			border: 2px solid ;
			padding:1%;
			border-collapse: separate;

		}

	</style>
	<link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
	<?php  include_once('admin_logged_page.php'); ?>
	<div class="client">
		<table style="border-collapse: collapse; width: 100%">
		<legend style="font-size: 30px;"><b>Employee VIEW<b></legend>
			<tr>
				<th>ID</th>
				<th>User Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Position</th>
				<th>DOB</th>
				<th>Gender</th>

				<th colspan="2"></th>
			</tr>
			<?php
	    while($row = $userQuery->fetch_assoc()){
	?>
	<tr>
					
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['position']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		<td><?php echo $row['gender']; ?></td>


 
	</tr>
	<?php } ?>


		</table>
	</div>

</body>
</html>