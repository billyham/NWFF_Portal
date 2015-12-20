<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title></title>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <LINK href="stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
        <img class="top" src="images/blackpixel.jpg" border="0" alt="logo" width="800" height="120" />

        <img src="images/logo308x106.png" border="0" alt="logo" width="308" height="106" />
        <h1 class="right">Northwest Film Forum Artist Portal</h1>

        
            <div class="Sidebar">

        </div>


        <div>
            <h1 class="main">Artist Portal Home</h1>
        </div>

        <div class="Content">

        <?php

        //sanitize string function
        function sanitizeString($var)
        {
            $var = stripslashes($var);
            $var = htmlentities($var);
            $var = strip_tags($var);
            return $var;
        }

        function mysql_fix_string($string) {
            if (get_magic_quotes_gpc()) $string = stripslashes($string);
            return mysql_real_escape_string($string);
        }






        echo <<<_END

        <table cellpadding=20>

        <tr>
        <td>

        <p>
        <strong>Login error. Please try again.</strong><br /><br />
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



_END;

        ?>
            
        </div>

    </body>
</html>
