<?php
  include "header.php";
?>
<?php
  include "connect_db.php";
?>

<div class="after_login_body">
    <?php
    $username = $_POST['username'];
    $password = $_POST['password'];
  
    if($username && $password)
    {
      connect_db();
    $query = "SELECT * FROM users ";
    $query .= "WHERE email='$username' ";
    
    $result = mysqli_query($connection,$query);
    if(!$result)
    {
        die("query failed".mysqli_error($connection));
    }
    $row = mysqli_fetch_assoc($result);
        
    if($row)
    {
        if(crypt($password, $row['password']) == $row['password'])
        {
//            session_start();
            header('Location:profile.php');
        }
        else
        {
            echo "Please enter correct Username and password.";
        }
    }
    
    }
    else
    {
        echo "Please enter username and password.";
    }
    
    ?>
</div>
<?php
  include "footer.php";
?>
