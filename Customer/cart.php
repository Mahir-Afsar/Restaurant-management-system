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
            <div class="displayItem">
                <div class="item"><h2>Items</h2></div> 
                <div class="names"><h2>name</h2></div> 
                <div class="prices"><h2>price</h2></div>
                 <div class="quantity"><h2>Quantity</h2></div>
                 <div class="total"><h2>Total</h2></div>             
             </div>

           
             <div class="cartdisp"></div>

             <div class="totalPriceCart">
                 <div class="subtotal">subtotal</div>
                 <div class="priceView">
                    <h2>00</h2> 
                 </div>
             </div>


            <script src="main.js"></script>
</body>
</html>