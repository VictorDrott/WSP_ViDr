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

    $sql = "SELECT * FROM Users WHERE mail='$mail'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    //Check if user already exists
    if($resultCheck == 0){
      $sql = "INSERT INTO Users (firstname, lastname, password, mail) VALUES ('$firstname', '$lastname', '$password', '$mail')";
      $result = mysqli_query($conn, $sql);
      echo("USER CREATED");
      header("Location: ../index.php?register=success");
    }else{
      echo("USER ALREADY EXIST");
      header("Location: ../index.php?register=failed");
    }
  }

?>
