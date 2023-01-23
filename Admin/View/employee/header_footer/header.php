
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		a:link
		{
			color: white;
			text-decoration: none;
			
		}
		a:visited 
		{
		  	color: white;
		  	text-decoration: none;
			  text-align: center;
		}
		a:hover 
		{
		  	color: #00ffff;
		  	text-decoration: none;
		}
		.color
		{
			color: white; 
			text-align: center;
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
			background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
			color: white;
			padding: 0.5%; 
		}
		/* .shadow
		{
			text-shadow: 0 0 8px #e60000;
		} */
		.navlink
		{
			font-family: Arial, Helvetica, sans-serif;
			column-width: 60%;
		}
	</style>
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
				<span class="color">LOGGED IN AS</span> 
				<a href="" style="width: 100%" ><b><i><?php echo $_SESSION["name_user"];?></i></b></a> |
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