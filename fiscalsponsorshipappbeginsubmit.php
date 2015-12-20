<?php

require_once 'databaselogin.php';

//very important to have the database connection happen before the use of mysql_real_escape fundtion
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

        if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
        mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

require_once 'submit_template.php';

//
//if (isset($_POST['key_id'])) {
//    $key_id = $_POST['key_id'];
//} else {
//    $key_id = "";
//}

if (isset($_POST['applicant_email']))
    $email = mysql_fix_string($_POST['applicant_email']);
else
    $email = "(undefined)";

if (isset($_POST['title']))
    $title = mysql_fix_string($_POST['title']);
else
    $title = "(undefined)";




//Enter into Database

$query = "insert into billyx_portal.fiscal(
		applicant_email,
                title
        )
	values(
		'$email',
                '$title'
        )";

$result = mysql_query($query);


//look up item applicant key_id and assign to a variable.
$key_id = mysql_insert_id();
//       echo 'line id is'.$lineid;


if (!$result)
    die("Database access failed: " . mysql_error());
mysql_close($db_server);

session_start();
$_SESSION['key_id'] = $key_id;

//redirect to the next page
header("Location: fiscalsponsorshipapp1.php");
?>
