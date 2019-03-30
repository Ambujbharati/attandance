<?php
function connect_db()
{
    global $connection;
    $connection = mysqli_connect('localhost','root','','pro');
    if(!$connection)
    {
        die("Database not connected");
    } 
}

function connect_db_new_class()
{
    global $connection2;
    $connection2 = mysqli_connect('localhost','root','','tics');
    if(!$connection2)
    {
        die("Database not connected");
    } 
}
       
?>