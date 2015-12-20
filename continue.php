<?php // continue.php
session_start();

if (isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    
    echo "Welcome back $first_name.<br />
    Your full name is $first_name $last_name.<br />
    Your email is '$email'
    and your password is '$password'.<br />";
    
    echo "<a href=logout.php>log out</a>";
    
}
else echo "Please <a href=authenticate3.php> click here</a> to log in.";


?>
