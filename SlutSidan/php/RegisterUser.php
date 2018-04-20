<?php
  include_once 'dbconnect.php';

  if(!$conn){
    die("connection failed" .mysqli_connect_error());
  }

  if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $password = $_POST["password"];
    $mail = $_POST["mail"];

    $sql = "INSERT INTO Users (firstname, lastname, password, mail) VALUES ('$firstname', '$lastname', '$password', '$mail')";
    $result = mysqli_query($conn, $sql);
    echo("USER CREATED");
  }

?>
