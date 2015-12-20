<?php

        //get imported variables
        if (isset($_POST['uetemp'])) $uetemp = $_POST['uetemp'];
        else $uetemp = "";

        if (isset($_POST['pwtemp'])) $pwtemp = $_POST['pwtemp'];
        else $pwtemp = "";


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



        $uetemp = mysql_fix_string($uetemp);
        $pwtemp = mysql_fix_string($pwtemp);

        $userpass_check = null;

        if ($pwtemp == "") {
            header( "Location: loginerror.php");
        }


        //Check Database

        require_once 'loginindex.php';                                                   //login to mysql
        $db_server = mysql_connect($db_hostname, $db_username, $db_password);


        if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
        mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

        $query = "select * from applicant where email='$uetemp'";
        $result = mysql_query($query);

        if (!$result) header( "Location: loginerror.php");
        //if (!$result) die ("Database access failed: " . mysql_error());


        $rows = mysql_num_rows($result);                                        //count of rows

        $userpass_check = mysql_result($result,0,'password');
        $uetemp = mysql_result($result,0,'email');

        mysql_close($db_server);



       //redirect to the next page
        if ($pwtemp === $userpass_check) {
       header( "Location: authenticate3?uetemp=$uetemp" );
        } else {
       header( "Location: loginerror.php");
        }



        ?>




