<nav>
  <ul>
    <?php
      if(isset($_SESSION['mail'])){
        echo '<li class="welcome">
          Welcome ' . $_SESSION["mail"] . '
        </li>
        <li>
          <form action="php/loggout.php" method="POST">
            <input type="submit" name="submit" value="loggout">
          </form>
        </li>';
      }else{
        echo('<li>
          <a href="register.php">Register</a>
        </li>
        <li>
          <a href="login.php">Login</a>
        </li>');
      }
    ?>
  </ul>

</nav>
