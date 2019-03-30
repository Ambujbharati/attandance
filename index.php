<?php
  include "header.php";
?>
<main class="main">
  <div class="info"><br><br><br>
    <h2 class="enter">Enter Information</h2><br>
    <form action="attendance.php" method="post">
        <ul class="main_ul">
             <li class="main_li"><b>Course Name</b><br>
             <select name="course" class="input">
                 <option value="BSC">BSC</option>
                 <option value="BMS">BMS</option>
                 <option value="BFIA">BBA(FIA)</option>
             </select></li><br><br>
             <li class="main_li"><b>Semester</b><br>
             <select name="sem" class="input">
                 <option value="1st">1st</option>
                 <option value="2nd">2nd</option>
                 <option value="3rd">3rd</option>
                 <option value="4th">4th</option>
                 <option value="5th">5th</option>
                 <option value="6th">6th</option>
             </select></li><br><br>
             <li class="main_li"><b>Roll Number</b><br>
             <input type="text" name="roll" class="input"></li>
             <li class="main_li"><input type="submit" class="submit" name="submit" value="submit" class="submit"></li>
        </ul>
    </form>
  </div>
</main>

<?php
  include "footer.php";
?>
