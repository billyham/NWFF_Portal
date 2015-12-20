<?php

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

$query = "select * from billyx_portal.fiscal where key_id='$key_id'";  

$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());


$rows = mysql_num_rows($result);                                        //count of rows

$title = mysql_result($result,0,'title');
$prod_desc = mysql_result($result,0,'prod_desc');
$timeline = mysql_result($result,0,'timeline');
$bio_1 = mysql_result($result,0,'bio_1');
$bio_2 = mysql_result($result,0,'bio_2');
$bio_3 = mysql_result($result,0,'bio_3');



mysql_close($db_server);

?>