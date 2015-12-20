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



if (isset($_POST['first_name']))
    $first_name = $_POST['first_name'];
else
    $first_name = "(undefined)";

if (isset($_POST['last_name']))
    $last_name = $_POST['last_name'];
else
    $last_name = "(undefined)";

if (isset($_POST['uetemp']))
    $uetemp = $_POST['uetemp'];
else
    $uetemp = "(undefined)";

if (isset($_POST['pwtemp']))
    $pwtemp = $_POST['pwtemp'];
else
    $pwtemp = "(undefined)";




//sanitize imported variables

//$first_name = mysql_fix_string($first_name);
//$last_name = mysql_fix_string($last_name);
//
//$uetemp = mysql_fix_string($uetemp);
//$pwtemp = mysql_fix_string($pwtemp);


require_once  'databaselogin.php';

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

    
//check that the email address is unique, if not, return to login page with error code   
$queryCheck = "SELECT * FROM users WHERE email='$uetemp'";
$resultCheck = mysql_query($queryCheck);
if (!$resultCheck)
    die("My Pants Database access failed: " . mysql_error());
elseif (mysql_num_rows($resultCheck)){

    header("location: login.php?errortest=bademail");
}


//insert new user info to database
$query = "insert into billyx_portal.users (
		first_name,
		last_name,
		email,
		password
		)
	values(
		'$first_name',
		'$last_name',
		'$uetemp',
		'$pwtemp'
	)";

$result = mysql_query($query);

//look up item applicant key_id and assign to a variable. Just in case.
$app_key = mysql_insert_id();
//echo 'line id is'.$lineid;

if (!$result) die ("Database access failed: " . mysql_error());

mysql_close($db_server);


//redirect user to authenticate3 to begin session (better is sent by POST)
header("location: authenticate3.php?uetemp=$uetemp&pwtemp=$pwtemp");

//echo "<a href=authenticate3.php?uetemp='$uetemp'&pwtemp='$pwtemp'>continue</a>";

?>
