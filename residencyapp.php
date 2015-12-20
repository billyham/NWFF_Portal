<?php
session_start();
if (!isset($_SESSION['email'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>

<html>
    <head>
        <title>NWFF Artist Portal : Residency Application</title>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <LINK href="stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <img class="top" src="images/blackpixel.jpg" border="0" alt="logo" width="800" height="120" />

        <a href="http://www.nwfilmforum.org"><img src="images/logo308x106.png" border="0" alt="logo" width="308" height="106" /></a>
        <h1 class="right">Northwest Film Forum Artist Portal</h1>







        <?php
        require_once "require_sidebar.php";
        ?>



    <div>
        <h1 class="main">Filmmaker Institute 2012 Application</h1>
    </div>

    <div class="Content">
        <h2>Application</h2>
        <p>
            Application text
        </p>



        <p>


            For questions, contact the Studio Director: dave at nwfilmforum.org  /  206-329-2629
        </p>

        <p>
            <a href="portal.php">Back to portal</a>
        </p>


    </div>






</body>

</html>

