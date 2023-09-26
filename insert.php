<?php
include "connect.php";

if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
//Fetches the info from the form
    $fName = $_POST ["firstName"];
    $lName = $_POST ["lastName"];
    $email = $_POST ["email"];    
    $pNumber = $_POST ["phoneNumber"];
    $password = $_POST ["customerPassword"];

//Insert into database
    $statement = $conn->prepare ("INSERT INTO customers(firstName, lastName, 
    email, phoneNumber, customerPassword)
    VALUES(?,?,?,?,?)");

    $statement->bind_param("sssss",$fName, $lName,$email, $pNumber, $password);
    $statement->execute();
  include "index.php";
    $statement->close();
    }
?>
 