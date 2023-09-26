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
<section class="checkout-section">
    <h1 class="checkout-heading">Checkout</h1>
  <h2 class="subheading">Contact Information</h2>

  <div class="input-container">
    <div class="input-group">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" required>
    </div>

    <div class="input-group">
      <label for="surname">Surname</label>
      <input type="text" id="surname" name="surname" required>
    </div>
  </div>

  <div class="input-container">
    <div class="input-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" style="padding: 5px;
      width: 300px;
      border-radius: 20px; /* Adjust the width as needed */
      border: none;
      height: 35px;
      background: #D9D9D9;" required>
    </div>

    <div class="input-group">
      <label for="phone">Phone</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
  </div>
  <h2 class="subheading">Delivery Method</h2>
  <p>**Recurring deliveries are made on Thursdays if Every week, and the second week of the month if Every month</p>

  <div class="delivery-container">

    <div class="btn-group">
        <input type="radio" id="standard" name="delivery" value="standard">
        <label for="standard">Standard</label>
  
        <input type="radio" id="recurring" name="delivery" value="recurring">
        <label for="recurring">Recurring</label>
      </div>
    <select>
      <option value="every-week">Every Week</option>
      <option value="every-month">Every Month</option>
    </select>
  </div>

  <h4 class="sub-subheading">Billing Address</h4>

  <div class="address-container">
    <div class="input-group">
      <label for="street">Street Address</label>
      <input type="text" id="street" name="street" required>
    </div>

    <div class="input-group">
      <label for="zip">Zip Code</label>
      <input type="text" id="zip" name="zip" required>
    </div>
  </div>

  <div class="input-group">
    <label for="city">City</label>
    <input type="text" id="city" name="city" required>
  </div>
  <h2 class="subheading">Payment Method</h2>

  <div class="payment-container">

    <div class="radio-group">
      <input type="radio" id="mastercard" name="payment" value="mastercard" style="font-size: 15px;">
      <label for="mastercard">MasterCard</label>

      <input type="radio" id="cash-on-delivery" name="payment" value="cash-on-delivery" style="font-size: 15px;">
      <label for="cash-on-delivery">Cash on Delivery</label>
    </div>
  </div>
 
  <div class="card-details">
    <label for="card-name">Card Name</label>
    <input type="text" id="card-name" name="card-name" required>
    
    <label for="card-number">Card Number</label>
    <input type="text" id="card-number" name="card-number" required>
  </div>

  <div class="card-details">
    <label for="month">Month</label>
    <input type="text" id="month" name="month" required>

    <label for="year">Year</label>
    <input type="text" id="year" name="year" required>

    <label for="cvc">CVC</label>
    <input type="text" id="cvc" name="cvc" required>
  </div>
  <a href="ConfirmOrder.php"><button class="confirm-button">Confirm Order</button></a>
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