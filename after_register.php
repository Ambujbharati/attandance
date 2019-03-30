<?php
  include "header.php";
?>
<?php
  include "connect_db.php";
?>
<div class="after_register_body">
    <?php
 $name   = $_POST['name'];
 $course = $_POST['course'];
 $sem    = $_POST['sem'];
 $sec    = $_POST['sec'];
 $rollno = $_POST['roll'];

 connect_db();

$query1 = "SELECT * FROM student WHERE rollno='$rollno'";
$result1 = mysqli_query($connection,$query1);
$row =mysqli_fetch_assoc($result1);
if($rollno==$row['rollno'])
{
   die("Already Registered");
}
else
{
     $query2 = "INSERT INTO student(name,course,semester,section,rollno) ";
     $query2 .= "VALUES ('$name', '$course', '$sem', '$sec', '$rollno')";

     $result2 = mysqli_query($connection,$query2);
    if(!$result2)
    {
        die("Query failed".mysqli_error($result));
    }
    else
    {
        echo "Congratulation, You are registered now";
    }
}
?>
</div>
<?php
  include "footer.php";
?>