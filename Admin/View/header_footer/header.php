
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		/* a:link
		{
			color: white;
			text-decoration: none;
		}
		a:visited 
		{
		  	color: white;
		  	text-decoration: none;
		}
		a:hover 
		{
		  	color:blue;
		  	text-decoration: none;
		}
		.color
		{
			color: white; 
		}
		.h2
		{
			font-family: Arial, Helvetica, sans-serif;
			text-align: left;

		}
		.padding
		{
			padding-left: 100%
		}
		.header 
		{
			position: fixed;
			top: 0;
			background-color:#158ced;
			color: white;
			padding: 0.2%; 
		} */
		/* .shadow
		{
			text-shadow: 0 0 8px #e60000;
		} */
		/* .navlink
		{
			font-family: Arial, Helvetica, sans-serif;
			column-width: 100%
		} */
	</style>
	<link rel="stylesheet" href="../css/mystyle.css">
</head>
</head>
<body>

<header class="header">

	<table >
		<tr>
			<th>
				<img src="image/food.png" alt="food logo" width="70px" height="70px" >
			</th>
			<th style="width: 20%">
				<h2 class="h2 shadow">FOOD GALLERY</h2>
			</th>
			<th style="width: 100%; text-align: right;" class="h2" >
			<?php if(isset($_SESSION["name_user"])) : ?>
				<span class="color">LOGGED IN AS</span> <a href="" style="width: 100%" ><?php echo $_SESSION["name_user"];?></a> |
				<a href="logout.php" style="width: 100%" >LOG OUT</a>
			<?php else : ?>
				<a href="home_page.php" style="width: 100%" >HOME</a> |
				<a href="login_page.php" style="width: 100%" >LOGIN</a> |
				<a href="" style="width: 100%" >SIGN UP</a>
			<?php endif; ?>

			</th>

		</tr>
	</table>
</header>

</body>
</html>