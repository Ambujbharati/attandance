<?php
  include "header.php";
?>
<html>
    <head>
        <title>Contact Us</title>
    </head>
    <body>
        <!--<h3>Phone Number : 9670384373</h3>-->
        <!--<h3>Email Address : agbaba6589@gmail.com</h3>-->
        <main class="main">
  <div class="info"><br><br><br>
    <h2 class="enter"><a href="login.php">Login</a> or Signup</h2><br>
    <form action="after_signup.php" method="post">
        <ul class="main_ul">
             <li class="main_li"><b>College Official Email</b><br>
             <input type="text" name="email" class="input"></li>
             <li class="main_li"><b>Full Name</b><br>
             <input type="text" name="name" class="input"></li>
             <li class="main_li"><b>Department</b><br>
             <select name="department" class="input">
                 <option value="BSC">BSC</option>
                 <option value="BMS">BMS</option>
                 <option value="BFIA">BBA(FIA)</option>
             </select></li>
             <li class="main_li"><b>Password</b><br>
             <input type="password" name="password" class="input"></li>
             <li class="main_li"><b>Confirm Password</b><br>
             <input type="password" name="confirm_password" class="input"></li>
             <li class="main_li"><input type="submit" class="submit" name="submit" value="submit" class="submit"></li>
        </ul>
    </form>
  </div>
</main>
    </body>
</html>
<?php
  include "footer.php";
?>
