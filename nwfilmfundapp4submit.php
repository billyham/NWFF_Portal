<?php
require_once 'databaselogin.php';

//very important to have the database connection happen before the use of mysql_real_escape fundtion
$db_server = mysql_connect($db_hostname, $db_username, $db_password);

        if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
        mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

require_once 'submit_template.php';

$queryString = "";

        
if (isset($_POST['key_id'])){
    $key_id = $_POST['key_id'];
}else{
    $key_id = "";
}

//this retrieves the form GET info and builds the sql query to input data
$queryString = setVariable('worksamp_1_title', $queryString);
$queryString = setVariable('worksamp_1_trt', $queryString);
$queryString = setVariable('worksamp_1_desc', $queryString);
$queryString = setVariable('worksamp_1_link', $queryString);
$queryString = setVariable('worksamp_1_dvd', $queryString);
$queryString = setVariable('worksamp_2_title', $queryString);
$queryString = setVariable('worksamp_2_trt', $queryString);
$queryString = setVariable('worksamp_2_desc', $queryString);
$queryString = setVariable('worksamp_2_link', $queryString);
$queryString = setVariable('worksamp_2_dvd', $queryString);
$queryString = setVariable('worksamp_3_title', $queryString);
$queryString = setVariable('worksamp_3_trt', $queryString);
$queryString = setVariable('worksamp_3_desc', $queryString);
$queryString = setVariable('worksamp_3_link', $queryString);
$queryString = setVariable('worksamp_3_dvd', $queryString);



        //eliminate the comma at the start of the string
        $newString = substr($queryString, 1);
        
        
        //the entire sql query
        $query = "update billyx_portal.filmfund set ".$newString." where key_id='".$key_id."'";
        

        $result = mysql_query($query);


        if (!$result) die ("Database access failed: " . mysql_error());
        mysql_close($db_server);

       //redirect to the next page
       header( "Location: nwfilmfundapp5.php" );

?>
