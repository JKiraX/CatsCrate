<?php
include "connect.php";

session_start();

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {

  $email = $_POST["email"];
  $password = $_POST["customerPassword"];

  $sql = "SELECT * FROM customers WHERE email='$email' AND customerPassword='$password'";
  $result = mysqli_query($conn, $sql);

// check if there is a row is returned
  if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = true;

    header("Location: index.php");
// redirect to welcome page
   
    exit;
  } else {
    $error = "Invalid email or password";
    echo "Invalid password or email, please try again";
  }
  mysqli_close($conn);
}
?>
