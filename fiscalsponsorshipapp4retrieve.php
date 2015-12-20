<?php

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

$query = "select * from billyx_portal.fiscal where key_id='$key_id'";  

$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());


$rows = mysql_num_rows($result);                                        //count of rows

$title = mysql_result($result,0,'title');

$worksamp_1_title = mysql_result($result,0,'worksamp_1_title');
$worksamp_1_trt = mysql_result($result,0,'worksamp_1_trt');
$worksamp_1_desc = mysql_result($result,0,'worksamp_1_desc');
$worksamp_1_link = mysql_result($result,0,'worksamp_1_link');
$worksamp_1_dvd = mysql_result($result,0,'worksamp_1_dvd');

$worksamp_2_title = mysql_result($result,0,'worksamp_2_title');
$worksamp_2_trt = mysql_result($result,0,'worksamp_2_trt');
$worksamp_2_desc = mysql_result($result,0,'worksamp_2_desc');
$worksamp_2_link = mysql_result($result,0,'worksamp_2_link');
$worksamp_2_dvd = mysql_result($result,0,'worksamp_2_dvd');

$worksamp_3_title = mysql_result($result,0,'worksamp_3_title');
$worksamp_3_trt = mysql_result($result,0,'worksamp_3_trt');
$worksamp_3_desc = mysql_result($result,0,'worksamp_3_desc');
$worksamp_3_link = mysql_result($result,0,'worksamp_3_link');
$worksamp_3_dvd = mysql_result($result,0,'worksamp_3_dvd');




mysql_close($db_server);

?>