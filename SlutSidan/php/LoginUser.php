<?php
  include_once 'dbconnect.php';

  if(!$conn){
    die("connection failed" .mysqli_connect_error());
  }else{
    echo ("connetion success");
  }

  $password = $_POST["password"];
  $mail = $_POST["mail"];

  $sql = "SELECT ";

  $result = mysqli_query($conn, $sql);
?>
