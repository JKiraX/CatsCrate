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
  <link rel="stylesheet" href="catsCrate.css">
  

</head>
  
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
      <a href="index.php"><img src="images/CatsCrate.png" class="logo" id="logo"></a>
      </div>
  </nav>
</div>
  <div class="image-container">
    <img src="images/c-shii-ZS7nn7ABVFY-unsplash.jpg" alt="Cover Image">
    <div class="overlay-text-left">
      <h2>Premium quality at it Finest</h2>
    </div>
    <div class="overlay-text-right">
      <a href="Shop.php" class="shop-button">SHOP NOW</a>
    </div>
  </div>

  <div class="blue-info">
    <div class="truck">
    <i class="fa-solid fa-truck-fast" style="color: #b6bdff; font-size: 100px; margin-left: 5%;"></i>
    <h2>Fast and Reliable Delivery</h2>
    <p>Make recurring deliveries on cat essentials such as cat food and cat litter</p>
  </div>

  <div class="box">
    <i class="fa-solid fa-boxes-packing" style="color: #eab95b; font-size:100px;"></i>
    <h2>120-Day Returns</h2>
    <p>Returns are accepted within 120-days of purchase</p>
  </div>
  <div class="paw">
    <i class="fa-solid fa-paw" style="color: #9dff70; font-size: 100px; padding-bottom: 10px;"></i>
    <h2>Premium Quality Products</h2>
    <p>Discover a wide range of premium cat products for your feline companion</p>
  </div>
</div>

 
  
  
<?php

// Fetch the 8 random products in table
  $sql = "SELECT * FROM product  LIMIT 8";
  $result = $conn->query($sql);

// Display the fetched data on the featured section
echo '<section class="best-sellers">';
echo '<h1>Best Sellers</h1>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $productName = $row['productName'];
      $productPrice = $row['productPrice'];
      $productImage = $row['productImage'];

// Display the product information dynamically

echo '<div class="product-cards1">';
echo '<div class="product-card1">';
echo '<img src="' . $productImage . '" alt="productImage">';
echo '<h3>' . $productName . '</h3>';
echo '<p>' . $productPrice . '</p>';
echo '<button>Add to Cart</button>';
echo '</div>';
echo '</div>';


    }
  } else {
    echo "No products found.";
  }
echo '</section>';
?> 



  <section class="card">
    <div class="card-image">
      <img src="images/kabo-OouGoqQuf64-unsplash.jpg" alt="Image">
    </div>
    <div class="card-content">
      <h1>Learn about your Feline Friend</h1>
      <p>Discover all there is to know about your cat companion. 
        From Cat health, to grooming behavior and nutrition. 
        Here's how to take care of your feline friend</p>
        <a href="CatCare.php">Read More...</a>
    </div>
  </section>
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