<?php
  include "header.php";
?>

        <main class="main">
  <div class="info"><br><br><br>
    <h2 class="enter">Login or <a href="signup.php">Signup</a></h2><br>
    <form action="after_login.php" method="post">
        <ul class="main_ul">
             <li class="main_li"><b>Username</b><br>
             <input type="text" name="username"class="input"></li><br><br>
             <li class="main_li"><b>Password</b><br>
             <input type="password" name="password" class="input"></li>
             <li class="main_li"><input type="submit" class="submit" name="submit" value="submit" class="submit"></li>
        </ul>
    </form>
  </div>
</main>
<?php
  include "footer.php";
?>
