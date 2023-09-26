<?php
include "connect.php";

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
//Fetches the info from the form
    $fName = $_POST ["firstName"];
    $lName = $_POST ["lastName"];
    $email = $_POST ["email"];    
    $pNumber = $_POST ["phoneNumber"];
    $password = $_POST ["customerMessage"];

//Insert into database
    $statement = $conn->prepare ("INSERT INTO messages(firstName, lastName, 
    email, phoneNumber, customerMessage)
    VALUES(?,?,?,?,?)");

    $statement->bind_param("sssss",$fName, $lName,$email, $pNumber, $password);
    $statement->execute();
    echo "Thannk you for contacting us, we will be in contact soon! ";
    echo '<a href="index.php">click here to return to CatsCrate home page</a>';
    $statement->close();
    }
?>
 