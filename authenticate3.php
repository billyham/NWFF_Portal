<?php

require_once 'databaselogin.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server)
    die("Unable to connect to MySQL: " . mysql . error());
mysql_select_db($db_database)
        or die("Unable to select database: " . mysql_error());




//accommodate GET variables coming from createlogin.php
if (isset($_GET['uetemp']))
    $ue_temp = mysql_fix_string($_GET['uetemp']);
else
    $ue_temp = "";

if (isset($_GET['pwtemp']))
    $pw_temp = mysql_fix_string($_GET['pwtemp']);
else
    $pw_temp = "";





//get imported variables
if (isset($_POST['uetemp']))
    $ue_temp = mysql_fix_string($_POST['uetemp']);
//else
//    $ue_temp = "";

if (isset($_POST['pwtemp']))
    $pw_temp = mysql_fix_string($_POST['pwtemp']);
//else
//    $pw_temp = "";



if (($pw_temp == "") OR ($ue_temp == "")) {
    header("Location: loginerror.php");
}

    
    
    $query = "SELECT * FROM users WHERE email='$ue_temp'";
    $result = mysql_query($query);
    if (!$result)
        die("Database access failed: " . mysql_error());
    elseif (mysql_num_rows($result)) {
        $row = mysql_fetch_row($result);
        
        //currently not using salts or md5, until data entry is also using it
//        $salt1 = "qm&h*";
//        $salt2 = "pg!@";
//        $token = md5("$salt1$pw_temp$salt2");

        if ($pw_temp == $row[4])
        {
         session_start();
         $_SESSION['email'] = $ue_temp;
         $_SESSION['password'] = $pw_temp;
         $_SESSION['first_name']= $row[0];
         $_SESSION['last_name'] = $row[1];
         
         //setting a time out for 1 day
         //ini_set('session.gc_maxlifetime', 60 * 60 * 24);
        
         
         header("Location: portal.php");
         
//            echo "$row[0] $row[1] :
//                Hi $row[0], you are now logged in as '$row[2]'";
//            die ("<p><a href=continue.php>Click here to continue</a></p>");
        }
            else
            header("Location: loginerror.php");
    }
    else
            header("Location: loginerror.php");




    
        //sanitize string function but this never works
function sanitizeString($var) {
    $var = stripslashes($var);
    $var = htmlentities($var);
    $var = strip_tags($var);
    return $var;
}

function mysql_entities_fix_string($string)
{
    return htmlentities(mysql_fix_string($string));
}

//this is the one that actually works, and it needs to be used AFTER the database is open
function mysql_fix_string($string)
{
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    return mysql_real_escape_string($string);
}

?>
