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
  <!-- The form -->
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
  <div class="shop-header1">
    <h3>Home / Cat Care</h3>
    <h1>Taking care of Your Feline Friend</h1>
  </div>  
  
  <section class="blog-banner">
    <div class="banner-grid1">
      <img src="images/kabo-RKDRI_LK9c0-unsplash.jpg" alt="cat-food">
      <div class="banner-content1">
        <h1>Cat Care for Beginners</h1>
        <p>Are you a first-time cat owner? 
          Unlock the secrets to providing exceptional care for your feline friend with our concise guide. 
          From creating a safe environment to balanced nutrition and regular vet visits, we cover everything you need to know.<br><br>
          Start your journey to cat care excellence today!</p>
        <button>Learn More</button>
      </div>
    </div>
  </section>

  
  <?php

// Fetch the 8 random products in table
  $sql = "SELECT * FROM blogs  LIMIT 3";
  $result = $conn->query($sql);

// Display the fetched data on the featured section
echo '<section class="recent-posts">';
echo '<h2 style="text-align: center; padding-bottom: 20px; padding-top: 50px; font-size: 45px; ">Welcome to the CatsCrate Care Blog</h2>';
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
      $blogID = $row['blogID'];
      $blogImg = $row['blogImage'];
      $blogT = $row['blogTitle'];
      $blogD = $row['blogDescription'];

// Display the product information dynamically

echo '<div class="post-container" ">';
echo '<div class="post">';
echo '<img src="' . $blogImg . '" alt="blogImage">';
echo '<h3>' . $blogT . '</h3>';
echo '<p>' . $blogD . '</p>';
echo '<a href="Blog.php?blogID=' . $blogID . '" style="text-decoration: none; color: #D8061F;font-weight: bold;">Read More...</a>';
echo '</div>';
echo '</div>';


    }
  } else {
    echo "No products found.";
  }
echo '</section>';
?> 
<!-- 
  <section class="recent-posts">
    <h2 style="text-align: center; padding-bottom: 20px; padding-top: 50px; font-size: 45px; font-family: 'Kreon';">Welcome to the CatsCrate Care Blog</h2>
    <div class="post-container">
      <div class="post">
        <img src="images/pexels-william-sutherland-5201246.jpg" alt="Post 1">
        <h3>How Many Treats is Too Many?</h3>
        <p>Treats are a delightful way to show our feline friends some extra love. 
            But have you ever wondered how many treats are too many? 
            In this blog post, we delve into the topic of treat portions and discuss the importance of maintaining a balanced diet for your cat. 
            Discover the right balance between indulgence and nutritional well-being for your beloved companion.</p>
            <a href="CatCare.php" style="text-decoration: none; color: #D8061F;font-weight: bold;">Read More...</a>
      </div>
      <div class="post">
        <img src="images/pexels-cottonbro-studio-6864011.jpg" alt="Post 2">
        <h3>Importance of Cat Nutrition</h3>
        <p>Your cat's nutrition plays a vital role in their overall health and well-being. 
            In this informative blog post, we explore the importance of providing a proper diet for your feline companion. 
            From understanding their dietary needs to choosing the right cat food options, we'll guide you towards making informed decisions that contribute to a long and healthy life for your beloved pet.</p>
            <a href="CatCare.php" style="text-decoration: none; color: #D8061F;font-weight: bold;" >Read More...</a>
        </div>
      <div class="post">
        <img src="images/pexels-jill-qin-11852154.jpg" alt="Post 3">
        <h3>Understanding Cat Behavior</h3>
        <p> Cats have a unique way of communicating and expressing themselves. 
            If you've ever wondered what goes on inside your cat's mind, this blog post is for you. 
            We delve into the fascinating world of cat behavior, decoding their body language, vocalizations, and common behavioral patterns. 
            Gain valuable insights into your cat's emotions and behaviors, enabling you to strengthen your bond and create a harmonious living environment.</p>
            <a href="CatCare.php" style="text-decoration: none; color:#D8061F; font-weight: bold;">Read More...</a>
        </div>
    </div>
  </section> -->
  
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