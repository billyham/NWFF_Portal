<?php //logout.php
session_start();

if (isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];

    destroy_session_and_data();

    
}

else header("Location: loginerror.php");

function destroy_session_and_data()
{
    $_SESSION = array();
    if (session_id() != "" || isset($_COOKIE[session_name()]))
        setcookie(session_name(), '', time() - 2592000, '/');
    session_destroy();
}


?>

<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <LINK href="stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <img class="top" src="images/blackpixel.jpg" border="0" alt="logo" width="800" height="120" />

        <a href="http://www.nwfilmforum.org"><img src="images/logo308x106.png" border="0" alt="logo" width="308" height="106" /></a>
        <h1 class="right">Northwest Film Forum Artist Portal</h1>







        <div class="Sidebar">

            <p>

            </p>

        </div>


        <div>
            <h1 class="main">Artist Portal Logout</h1>
        </div>

        <div class="Content">

           <p>Your are now logged out</p>
           
           <p>
           <a href="portal.php">Back to Artist Support</a><br />
           <a href="http://www.nwfilmforum.org">Northwest Film Forum home</a>
           </p>


        </div>
        
        
    </body>

</html>