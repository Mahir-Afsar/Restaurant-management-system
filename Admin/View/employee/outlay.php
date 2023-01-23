<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	
	<style>
		.bg
		{
			background-color: #99ccff;
			background-image: linear-gradient( #ff99bb, #4d94ff);
		}
		.Welcome b
		{
			color:#558000;
		}
		.Welcome
		{
			font-family: Arial, Helvetica, sans-serif;
			position: relative;
			top:100px;
			width: 100%;
			text-align: center;
		}
		.legend
		{
			color: blue;
			font-family: Arial, Helvetica, sans-serif;
			text-align: left;
		}

		#panel, #flip {
  		padding: 5px;
  		text-align: center;
  		background-color: #e5eecc;
  		border: solid 4px #5900b3;
		
		}

		#panel 
		{
  			padding: 50px;
  			display: none;
		 	 background-color: #ff99cc;
			  color: #5900b3;

		
		}

		


		.fieldset
		{
			font-family: Arial, Helvetica, sans-serif;
			position: relative;
			top:175px;
			width: 80%;
			/* margin-right:50%; */
			margin-top: 60px;
  margin-bottom: 200px;
  margin-right: 70px;
  margin-left: 160px;
			text-align: left;
			border-style: dashed;
			border-width: thick;
			border-color: green;
			/* border-radius: 12px; */
		}
		.body
		{
			height:100%;
			margin: 0px;
		}

		.button
		{
		  	background-color:#ace600;
			border: none;
			color: black;
			padding: 10px 32px;
		    text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			font-family: Arial, Helvetica, sans-serif;
			font-weight : bold ;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 8px;
			transition-duration: 0.4s;

		}

		.button:hover
		{
			background-color:#558000;
			border: none;
			color: white;
			padding: 10px 32px;
		    text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			font-family: Arial, Helvetica, sans-serif;
			font-weight : bold ;
			margin: 4px 2px;
			cursor: pointer;
			border-radius: 8px;
			
		}
		
	</style>
</head>
<body class="body bg">


	<?php  include_once('header_footer/header.php'); ?>

	

	<?php  include_once('header_footer/footer.php'); ?>
</body>
</html>