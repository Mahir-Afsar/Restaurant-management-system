<?php include "../Admin/Model/conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Public Home Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("button").click(function(){
    $("#div1").fadeToggle();
  });
});
</script>
</head>
<style>
/* ul
{
  list-style-type: none;
  margin: 0;
  padding: 5;
  overflow: hidden;
  background-color: #008080;
}

li
{
  float: left;
}

li a
{
  display:block;
  color: white;
  text-align: center;
  padding: 12px 20px;
  text-decoration: none;
  width:200px;
}

li a:hover:not(.active)
{
  background-color: #111;
} */
.jq{
  color:white;
  background-color:#ee6e73;
}

</style>

<body class="body bg">

	<?php  include('outlay.php');?>

	<div class="Welcome">
		<!-- <ul id= "nav"> -->

	<!-- <div class="dropdown">
    <button class="dropbtn">Academics 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.aiub.edu/faculties/fst">Faculties</a>
      <a href="https://www.aiub.edu/academic-calendar">Academic Calender</a>
      <a href="https://www.aiub.edu/academic-regulations">Academic Rules & Regulations</a>
      <a href="https://www.aiub.edu/tuition-fee">Tuition Fees</a>
      <a href="https://www.aiub.edu/partnerships/academic-partners">Academic Partners</a>
    </div>
</div> -->

<!-- <div class="dropdown">
    <button class="dropbtn">Admission
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.aiub.edu/admission">Admission Process</a>
    </div>
  </div> -->

  <!-- <div class="dropdown">
    <button class="dropbtn">About 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.aiub.edu/about/Information">Information</a>
      <a href="https://www.aiub.edu/about/general-information">General Information</a>
      <a href="https://www.aiub.edu/about/Why-Study-Here">Why Study Here</a>
    </div>
  </div>  -->

  <!-- <div class="dropdown">
    <button class="dropbtn">Administration 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="https://www.aiub.edu/Administration/The-Vice-Chancellor">The Principal</a>
      <a href="https://www.aiub.edu/Administration/The-Chairman">The Chairman</a>
      <a href="https://www.aiub.edu/Administration/The-Founders">The Founder</a>
    </div>
  </div>  -->
		<!-- </ul> -->

	<fieldset class="fieldset" style="height: 300px;">
		<legend class="legend"><b>SPECIAL OFFER</b></legend>
		<left><img src="../Admin/View/image/offer.png" height="80";></left>
		<marquee>

			<p><b>
				<?php

				$sql = "select * from dashboard order by id";
				$result = mysqli_query($conn, $sql);
	
			    if(mysqli_num_rows($result)>0)
			    {
					while($row=mysqli_fetch_assoc($result))
					{
					    echo $row['id']."<span><b>. </span>".$row['date']."<span><b> --> </span>".$row['title']."<br/><br/>";
				    }
				}
				  //<marquee> 
				?>
			</p>
		</marquee>

			<left><div class="read">
				<a href="Offer.php"><b>Read More...</a> 
			 </div>
	</fieldset>

	<fieldset class="field" style="height: 320px; width: 270px;">

		<legend class="legend"><b>RESTAURANT VIEW</b></legend>
		<img src="../Admin/View/image/view1.jpg" height="100" width="240";><br>
		<img src="../Admin/View/image/view2.jpg" height="100" width="240";><br>
		<img src="../Admin/View/image/view3.jpg" height="100" width="240";><br>

	</fieldset>

    <fieldset class="field1" style="height: 230px; width: 270px;">

		<legend class="legend"></legend>
		<button class="jq">About Restaurant</button><br><br>

    <div id="div1">A restaurant (sometimes known as a diner) is a place where cooked food is sold to the public, and where people sit down to eat it. It is also a place where people go to enjoy the time and to eat a meal. ... These restaurants serve fast food, that is, inexpensive food, prepared and served quickly.</div>
	</fieldset>
	
	</div>

</body>
</html>