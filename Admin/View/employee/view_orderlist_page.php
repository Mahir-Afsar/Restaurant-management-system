<?php
// session_start(); 

include('control/showorderlistcheck.php');


// if(empty($_SESSION["username"])) // Destroying All Sessions
// {
// header("Location: ../control/login.php"); // Redirecting To Home Page
// }

$connection = new db();
$conobj=$connection->OpenCon();

$userQuery=$connection->ShowAllEmployee($conobj,"orderlist");
?>
<!DOCTYPE html>
<html>
<head>
	<title>LOGGED in as <?php echo $_SESSION['name_user'] ?></title>
	<style>
		.client
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
		}

	</style>
</head>
<body>
	<?php  include_once('employee_logged_page.php'); ?>
	<div class="client">
		<table style="border-collapse: collapse; width: 100%">
		<legend style="font-size: 30px;"><b><i>ORDER LIST VIEW</i><b></legend>
			<tr>
				
				<th>Customer Name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Order Item</th>
                <th>Price</th>
				<th>DOB</th>
				

				<th colspan="2"></th>
			</tr>
			<?php
	    while($row = $userQuery->fetch_assoc()){
	?>
	<tr>
					
		
		<td><?php echo $row['cname']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['address']; ?></td>
		<td><?php echo $row['order']; ?></td>
        <td><?php echo $row['price']; ?></td>
		<td><?php echo $row['dob']; ?></td>
		


 
	</tr>
	<?php } ?>


		</table>
	</div>

</body>
</html>