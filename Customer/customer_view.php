
    <?php
    session_start();
    if(isset($_SESSION["name_user"])) : ?>
<span class="color">LOGGED IN AS </span><a href=""style="width: 100%"><?php echo$_SESSION["name_user"]; ?> </a> |
<a href="logout.php"style="width: 100%">LOG OUT</a>

    <?php else : ?>
        
<a href="customer_view.php"style="width: 100%">HOME</a> |
<a href="customer_view.php"style="width: 100%">LOGIN</a> |
<a href=""style="width: 100%">SIGN UP</a>

<?php endif; ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
<div class="logo">
    <a href="customer_view.php">Home</a>
</div>
<div class="nav">
    <!--
    <a href="">product</a>
    <a href="">contact</a>
-->
    <a href="cart.php">cart<span>0</span></a>
</div>
    </header>
    <br>
    <br>

  <div>  
      <h2 class= "about"> ABOUT US </h2>
      <br>
      <br>


<p id="pabout">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur, quibusdam repudiandae. Esse, eius temporibus et voluptate natus consectetur necessitatibus quibusdam? Earum quasi error, omnis labore perferendis, neque nostrum voluptas vel ipsum deserunt impedit cupiditate nihil, veritatis aspernatur in sequi facere. Veritatis temporibus quis repellendus aut soluta magnam vel expedita vitae!</p>
<p id="pabout">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, modi voluptas tempore animi dicta dolores ab obcaecati esse fugiat reiciendis velit. A, expedita eaque saepe ullam fugit, in deserunt earum consequatur porro omnis reiciendis aliquid molestiae minus. Id voluptatem odit rem saepe quae fugiat explicabo, illo beatae atque debitis, eius dolor quisquam eveniet similique, minima optio? Nulla excepturi illum quaerat.</p>
<br>
<br>
          <button id="abtn">Dont Show this now</button>

</div>


<div class="container">
    <div class="productItem">
        <div class="image">
            <img src="image/image/burger3.jpg" alt="burger">
        </div>
        <div class="name">
            <h2>Burger</h2>
        </div>
        <div class="price">
            <span>100</span>
        </div>
        <div class="btn">
            <button>Add To Cart</button>
        </div>
    </div>
    <!--Second Item-->
    <div class="productItem">
        <div class="image">
            <img src="image/image/cake.jpg" alt="Cake">
        </div>
        <div class="name">
            <h2>Cake</h2>
        </div>
        <div class="price">
            <span>200</span>
        </div>
        <div class="btn">
            <button>Add To Cart</button>
        </div>
    </div>
    <!--Third item-->
    <div class="productItem">
        <div class="image">
            <img src="image/image/pizza2.jpg" alt="Pizza">
        </div>
        <div class="name">
            <h2>Pizza</h2>
        </div>
        <div class="price">
            <span>300</span>
        </div>
        <div class="btn">
            <button>Add To Cart</button>
        </div>
    </div>
</div>



<script src="main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("p").hide(1000);
  });
});
</script>

</body>
</html>