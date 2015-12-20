<?php

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

$query = "select * from billyx_portal.filmfund where key_id='$key_id'";  

$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());


$rows = mysql_num_rows($result);                                        //count of rows

$title = mysql_result($result,0,'title');
$funding_plan = mysql_result($result,0,'funding_plan');
$budget = mysql_result($result,0,'budget');
$funds_secured = mysql_result($result,0,'funds_secured');
$distribution = mysql_result($result,0,'distribution');




mysql_close($db_server);

?>