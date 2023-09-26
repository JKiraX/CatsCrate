<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/2b74791dfe.js" crossorigin="anonymous"></script>
  <script src="JavaScript.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kreon&display=swap" rel="stylesheet">
  <title>CatsCrate</title>
  <link rel="stylesheet" href="catsCrate.css"></head>
  
<body>
<?php include "connect.php" ?>
<?php include "logIn.php" ?>
  <div class="fixed-head">
    <h2 class="headerBar">FREE DELIVERY ON ORDERS OVER R300**</h2>
    </div>
    <nav>
  
      <div class="box1" style="display: in-line";>
        <input class="search" placeholder="Search entire store..." type="text" >
        <input type="submit" class="Go" value="Search">
       </div>
        <div class="nav-links" id="navLinks">
          <ul>
          <li><a href="index.php">HOME</a></a></li>
            <li><a href="OurStory.html">OUR STORY</a></a></li>
            <li><a href="Shop.php">SHOP</a></a></li>
            <li><a href="CatCare.php">CAT CARE</a></a></li>
         
          
            <div class="nav-links-right">
              
            <li><a href="Cart.html"><i class="fa-solid fa-cart-shopping" style='font-size:28px;color:#d8061f; text-align: right;'></i></a></a></li>
            <li><a href="Account.html"><i class='fa-solid fa-user' style='font-size:28px; color:#d8061f;'></i></a></a></li>
            <li><button class="open-button" onclick="openForm()">Login/Sign Up</button></li>
    
    
      
          </div>
          </ul>
          <a href="index.php"><img src="images/CatsCrate.png" class="logo"></a>
          </div>
      </nav>

  <div class="order-summary">
    <h1>Order Summary</h1>

    <div class="product">
      <img src="images/catfood.png" alt="Product 1" style="height:fit-content; margin-right: 20px;">
      <div class="product-info">
        <p class="product-name" style="font-size: 25px;">Cat Complete Cat Food 3kg</p>
        <p class="product-price" style="font-size: 20px;">R 200.00</p>
        <p class="product-quantity" style="font-size: 18px;">Quantity: 1</p>
      </div>
      <div class="line"></div>

      <div class="order-details">
        <p>Subtotal: R 200.00</p>
        <p>Delivery Type: Recurring - Every Week</p>
        <p>Delivery Fee: R 30.00</p>
        <div class="line"></div>

        <div class="order-total">
          <h2>Total: R 230.00</h2>
        </div>
        


    </div>
    </div>    
    <div class="place-order-button">
        <button>Place Order</button>
      </div>
  </div>
  <footer>
    <div class="footer-columns">
      <div class="column">
        <h3><a href="OurStory.html" style="text-decoration: none; color: white;">Our Story</a></a></h3>
        <h3><a href="contactUs.php" style="text-decoration: none; color: white;">Contact Us</a></a></h3>
        <h3>Privacy Policy</h3>
      </div>
      <div class="column">
        <h3>Follow Us</h3>
        <div class="social-icons">
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
      <div class="column">
        <h3>Subscribe to our Newsletter</h3>
        <div class="newsletter">
          <input type="email" placeholder="Enter your email">
          <button type="submit">Subscribe</button>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>