<?php

$db_server = mysql_connect($db_hostname, $db_username, $db_password);

if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

$query = "select * from billyx_portal.filmfund where key_id='$key_id'";  

$result = mysql_query($query);

if (!$result) die ("Database access failed: " . mysql_error());


$rows = mysql_num_rows($result);                                        //count of rows

$completion_timestamp = mysql_result($result,0,'completion_timestamp');
$submitted = mysql_result($result,0,'submitted');

$applicant_fname = mysql_result($result,0,'applicant_fname');
$applicant_lname = mysql_result($result,0,'applicant_lname');
$title = mysql_result($result,0,'title');
$shortdesc = mysql_result($result,0,'shortdesc');
$applicant_email = mysql_result($result,0,'applicant_email');
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
$prod_desc = mysql_result($result,0,'prod_desc');
$timeline = mysql_result($result,0,'timeline');
$artist_statement = mysql_result($result,0,'artist_statement');
$bio_1 = mysql_result($result,0,'bio_1');
$bio_2 = mysql_result($result,0,'bio_2');
$bio_3 = mysql_result($result,0,'bio_3');
$bio_4 = mysql_result($result,0,'bio_4');

$funding_plan = mysql_result($result,0,'funding_plan');
$funds_secured = mysql_result($result,0,'funds_secured');
$distribution = mysql_result($result,0,'distribution');

$budget = mysql_result($result,0,'budget');

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