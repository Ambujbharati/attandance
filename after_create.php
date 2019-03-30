<?php
  include "header.php";
?>

<?php
  include "connect_db.php";
?>

<div class="after_create_body">
    <?php
       $course = $_POST['course'];
       $sem    = $_POST['sem'];
       $sec    = $_POST['sec'];
       $sub    = $_POST['subject'];
      
    $concat = $course . $sem . $sec . $sub;
    
    connect_db();
    connect_db_new_class();
    
    $query1 = "CREATE TABLE $concat (id int[100] PRIMARY KEY AUTO INCREMENT, name varchar[32], rollno int[255])";
    $result1 = mysqli_query($connection2,$query1);
    
    if(!$result1)
    {
        die("Query Failed");
    }
    else
    {
        echo "Table Created";
    }
    
//    $query2 = "SELECT * FROM pro WHERE course='$course' && semester='$sem' && section='$sec'";
//    $result2 = mysqli_query($connection,$query2);
//    $row = mysqli_fetch_assoc($result2);
//
//    while($row)
//    {
//        $query3 = "INSERT INTO $concat(name,rollno) ";
//        $query3 .= "VALUES ('"$row['name']"', '"$row['rollno']"')";
//        result3 = mysqli_query($connection2,$query3);
//    }
//    if(!result3 || !result2 || !result1)
//    {
//        die("Query failed");
//    }
//    
    
    
    ?>
</div>

<?php
  include "footer.php";
?>