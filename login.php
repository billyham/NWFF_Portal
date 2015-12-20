<?php

//sanitize string function
function sanitizeString($var) {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}

function mysql_fix_string($string) {
    if (get_magic_quotes_gpc())
        $string = stripslashes($string);
    return mysql_real_escape_string($string);
}


if (isset($_GET['errortest']))
    $errortest = $_GET['errortest'];
else
    $errortest = "no";

?>


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


        </div>



        <div>
            <h1 class="main">Artist Portal Login</h1>
        </div>

        
        <?php
        
        if ($errortest == "bademail"){
            
            echo'
                <div class="content">
                <h2>Sorry, that email address not available</h2>
                </div>
            
';
        }
        
        ?>
        
        
        <div class="Content">


            <table cellpadding=20>


                <tr>
                    <td colspan=2>


                        <h1>
                            Thank you for your interest in Northwest Film Forum's artist support programs. 
                        </h1>
                        <p>
                            You can begin applying to 
                            Film Forum programs by first creating a login account for yourself.<br />
                        </p>

                    </td></tr>

                <tr><td>


                        <p>
                            <strong>Begin by creating a user login:</strong><br /><br />
                        </p>


                        <form method="post" action="createlogin.php" />

                        <p>Applicant First Name
                            <input type="text" name="first_name" /><br /></p>

                        <p>Applicant Last Name
                            <input type="text" size="29" name="last_name" /><br /></p>

                        <p>Applicant Email
                            <input type="text" size="29" name="uetemp" /><br /></p>

                        <p>Choose a Password
                            <input type="text" size="12" name="pwtemp" /><br /></p>



                        <input type="submit" value="Submit User Registration" />
                        </form><br />

                    </td>






                    <td valign="top">

                        <p>
                            <strong>Existing user login:</strong><br /><br />
                        </p>


                        <form method="post" action="authenticate3.php" />

                        <p>Applicant Email
                            <input type="text" size="29" name="uetemp" /><br /></p>

                        <p>Password
                            <input type="text" size="12" name="pwtemp" /><br /></p>



                        <input type="submit" value="Login" />
                        </form><br />


                    </td></tr>
            </table>

        </div>



    </body>

</html>

