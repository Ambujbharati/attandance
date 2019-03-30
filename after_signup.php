<?php
  include "header.php";
?>
<?php
  include "connect_db.php";
?>

<div class="after_signup_body">
<?php
    $email=$_POST['email'];
    $name=$_POST['name'];
    $department=$_POST['department'];
    $pass=$_POST['password'];
    $conpass=$_POST['confirm_password'];
    
    connect_db();
    
    $email=mysqli_real_escape_string($connection,$email);
    $name=mysqli_real_escape_string($connection,$name);;
    $pass=mysqli_real_escape_string($connection,$pass);
    $conpass=mysqli_real_escape_string($connection,$conpass);
    
    

   if($email && $name && $department && $pass && $conpass)
   {
       if($pass==$conpass)
       {   
           $hashformat = "$2y$10$";
           $salt = "himynameisambujbharti2";
           $hashformat_salt = ($hashformat.$salt);
           $pass = crypt($pass,$hashformat_salt);
           
           $query = "INSERT INTO users(email,name,department,password)";
           $query .= "VALUES ('$email','$name','$department','$pass')";
           
           $result = mysqli_query($connection,$query);
           
           if(!$result)
           {
               die('Query Failed'.mysqli_error);
           }
           else
           {
               echo "Form Submitted";
           }
       }
       else
       {
           echo "please re-inter your password";
       }
   }
   else
   {
       echo "error";
//       include "emptyerror.php"; 
   }
    
    
?>
</div>


<?php
  include "footer.php";
?>
