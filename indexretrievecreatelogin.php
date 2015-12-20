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



        if (isset($_POST['first_name'])) $first_name = $_POST['first_name'];
        else $first_name = "(undefined)";

        if (isset($_POST['last_name'])) $last_name = $_POST['last_name'];
        else $last_name = "(undefined)";

        if (isset($_POST['uetemp'])) $uetemp = $_POST['uetemp'];
        else $uetemp = "(undefined)";

        if (isset($_POST['pwtemp'])) $pwtemp = $_POST['pwtemp'];
        else $pwtemp = "(undefined)";





        //sanitize imported variables

        $first_name = mysql_fix_string($first_name);
        $last_name = mysql_fix_string($last_name);
        
       //$uetemp = mysql_fix_string($uetemp);
        //$pwtemp = mysql_fix_string($pwtemp);


        require_once 'loginindex.php';




//Enter into Database

$db_server = mysql_connect($db_hostname, $db_username, $db_password);


if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());


$query = "insert into filmfund.applicant (
		fname,
		lname,
		email,
		userpass
		)
	values(
		'$firstname',
		'$lastname',
		'$email',
		'$userpass'
	)";

$result = mysql_query($query);

//look up item applicant key_id and assign to a variable. Just in case.
$app_key = mysql_insert_id();
//echo 'line id is'.$lineid;

if (!$result) die ("Database access failed: " . mysql_error());


mysql_close($db_server);

header ( "Location: projectstart.php?app_key=$app_key" )

?>
