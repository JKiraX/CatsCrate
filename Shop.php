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

  <div class="shop-header">
    <h3>Home / Shop</h3>
    <h1>Shop All Cat Essentials</h1>
  </div>
  <section class="shop-section">
    <select class="filter-select" id="filter">
        
        <option value="all">Filter by Category</option>
        <option value="category1">Cat Food</option>
        <option value="category2">Accessories</option>
        <option value="category3">Toys</option>
        <option value="category4">Furniture</option>
        <option value="category5">Medication</option>
      </select>

      <select class="filter-select" id="filter2">
        <option value="all">Filter by Brand</option>
        <option value="size1">Royal Canin</option>
        <option value="size2">Hills</option>
        <option value="size3">Complete</option>
        <option value="size3">Whiskas</option>
        <option value="size3">Pampers</option>
      </select>
    
      <select class="filter-select" id="filter3">
        <option value="all">Sort By</option>
        <option value="color1">Price Low to High</option>
        <option value="color2">Price High to Low</option>
        <option value="color3">Most Popular</option>
      </select>
    
  </section>



 <?php

// Fetch the 8 random products in table
  $sql = "SELECT * FROM shop LIMIT 8";
  $result = $conn->query($sql);

// Display the fetched data on the featured section
echo '<section class="shop-sellers">';

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {

      $productImage = $row['product_image'];
      $productName = $row['product_name'];
      $productPrice = $row['product_price'];
      $productDescription = $row['product_description'];
      

// Display the product information dynamically

echo '<div class="product-cards">';
echo '<div class="product-card">';
echo '<img src="' . $productImage . '" id="productImage">';
echo '<h3>' . $productName . '</h3>';
echo '<p>' . $productPrice . '</p>';
echo '<button class="favorite-button" style="border-radius: 50px; background-color: #f58f9b;">
<a href="#" class="expand-icon"
  data-product-description="' . $productDescription . '"
  data-product-image="' . $productImage . '"
  data-product-price="' . $productPrice . '">
  <i class="fas fa-expand"></i>
</a>
</button>
';
echo '<button>Add to Cart</button>';
echo '</div>';
echo '</div>';


    }
  } else {
    echo "No products found.";
  }
echo '</section>';
?> 

<?php
include "popUp.php"
?>
<script>
  // Get references to relevant elements
  const expandIcons = document.querySelectorAll('.expand-icon');
  const popup = document.getElementById('popup');
  const popupTitle = document.getElementById('popup-title');
  const popupDescription = document.getElementById('popup-description');
  const popupImage = document.getElementById('popUpImage');
  const popupPrice = document.getElementById('popup-price');
  const closePopupButton = document.getElementById('close-popup');

  // Add click event listeners to expand icons
  expandIcons.forEach(icon => {
    icon.addEventListener('click', function(e) {
      e.preventDefault();
      const description = this.getAttribute('data-product-description');
      const image = this.getAttribute('data-product-image');
      const price = this.getAttribute('data-product-price');
      popupTitle.textContent = this.closest('.product-card').querySelector('h3').textContent;
      popupDescription.textContent = description;
      popupImage.src = image;
      popupPrice.textContent = 'Price: ' + price;
      popup.style.display = 'block';
    });
  });

  // Close pop-up window when close button is clicked
  closePopupButton.addEventListener('click', function() {
    popup.style.display = 'none';
  });
</script>
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