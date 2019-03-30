<?php
  
function connect_db()
{
    global $connection;
   $connection = mysqli_connect('localhost','root','','login');
    if(!$connection)
    {
        die("Database not connected");
    } 
}

function hash($pass)
{
    $hashformat = "$2y$10$";
    $salt = "himynameisambujbharti23";
    $hashformat_salt = ($hashformat.$salt);
    $pass = crypt($pass,$hashformat_salt);
    return $pass;
}

?>