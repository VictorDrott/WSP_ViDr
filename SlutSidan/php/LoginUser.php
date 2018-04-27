<?php
  session_start();
  include_once 'dbconnect.php';

  if(!$conn){
    die("connection failed" .mysqli_connect_error());
  }

  if(isset($_POST["submit"])){
    $password = $_POST["password"];
    $mail = $_POST["mail"];

    $sql = "SELECT * FROM Users WHERE mail='$mail'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck == 1){
      $row = mysqli_fetch_assoc($result);
      if($password == $row['password']){
        //Login User
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['mail'] = $row['mail'];
        $_SESSION['password'] = $row['password'];
        header("Location: ../index.php?login=success");
      }else{
          echo($row['password']);
          header("Location: ../index.php?login=pwfail");
          exit();
      }
    }else{
      header("Location: ../index.php?login=usernamenotfound");
      exit();
    }
  }

?>
