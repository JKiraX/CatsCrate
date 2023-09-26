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
      <a href="index.php"><img src="images/CatsCrate.png" class="logo"></a>
      </div>
  </nav>
  <div class="container">
    <div class="image">
      <img src="images/humberto-arellano-N_G2Sqdy9QY-unsplash.jpg" alt="Contact Image">
    </div>
    <div class="contact-form">
      <h1>Get in Touch</h1>
      <h3>Drop us a message and one of our response team members will get back to you </h3><br>
      <form action="insert1.php" method="POST">
        <label for="firstName">First Name</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phoneNumber">Phone Number</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <label for="issueDescription">Describe the Issue</label>
        <textarea id="issueDescription" name="customerMessage" rows="4" required></textarea>

        <button type="submit">Send</button>
      </form>
    </div>
  </div>
  

</body>
</html>