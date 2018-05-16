<nav>
  <ul>
    <?php
      if(isset($_SESSION['mail'])){
        echo '<li class="welcome">
          Welcome ' . $_SESSION["mail"] . '
        </li><li class="welcome">
          Welcome ' . $_SESSION["mail"] . '
        </li>
        <li>
          <form action="php/loggout.php" method="POST">
            <button type="submit" name="submit" value="loggout"></button>
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
