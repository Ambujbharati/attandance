<?php
  include "header.php";
?>
<div class="info">
    <h2 class="enter"><a href="student_register.php">Create New Class</a></h2><br>
    <form action="after_create.php" method="post">
        <ul class="main_ul">
             <li class="main_li"><b>Course Name</b><br>
             <select name="course" class="input">
                 <option value="BSC">BSC</option>
                 <option value="BMS">BMS</option>
                 <option value="BFIA">BBA(FIA)</option>
             </select></li><br><br>
             <li class="main_li"><b>Semester</b><br>
             <select name="sem" class="input">
                 <option value="1">1</option>
                 <option value="2">2</option>
                 <option value="3">3</option>
                 <option value="4">4</option>
                 <option value="5">5</option>
                 <option value="6">6</option>
             </select></li><br><br>
             <li class="main_li"><b>Section</b><br>
             <select name="sec" class="input">
                 <option value="1A">1A</option>
                 <option value="1B">1B</option>
                 <option value="1C">1C</option>
                 <option value="2A">2A</option>
                 <option value="2B">2B</option>
                 <option value="2C">2C</option>
                 <option value="3A">3A</option>
                 <option value="3B">3B</option>
                 <option value="3C">3C</option>
             </select></li><br><br>
             <li class="main_li"><b>Subject</b><br>
             <input type="text" name="subject" class="input"></li>
             <li class="main_li"><input type="submit" class="submit" name="submit" value="Create" class="submit"></li>
        </ul>
    </form>
</div>
<?php
  include "footer.php";
?>