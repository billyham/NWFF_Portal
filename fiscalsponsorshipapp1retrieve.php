<?php

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

$query = "select * from billyx_portal.fiscal where key_id='$key_id'";  

$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());


$rows = mysql_num_rows($result);                                        //count of rows

$title = mysql_result($result,0,'title');
$shortdesc = mysql_result($result,0,'shortdesc');
$entry_timestamp = mysql_result($result,0,'entry_timestamp');
$address = mysql_result($result,0,'address');
$city = mysql_result($result,0,'city');
$state = mysql_result($result,0,'state');
$zip = mysql_result($result,0,'zip');
$phone = mysql_result($result,0,'phone');
$director_fname = mysql_result($result,0,'director_fname');
$director_lname = mysql_result($result,0,'director_lname');
$additional_directors = mysql_result($result,0,'additional_directors');
$additional_producers = mysql_result($result,0,'additional_producers');
$synopsis = mysql_result($result,0,'synopsis');



mysql_close($db_server);

?>