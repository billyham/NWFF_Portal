<?php
function setVariable ($string, $myQuery) {
    
   (string) $variable = "";

    $newString = "'".$string."'";
        
    if (isset($_POST[$string])) $variable = mysql_fix_string($_POST[$string]);
        else return$myQuery;
        
        $myQuery = $myQuery.','.$string."='".$variable."'";
        
        return $myQuery;    
};


function mysql_fix_string($string)
{
    if (get_magic_quotes_gpc()) $string = stripslashes($string);
    
    return mysql_real_escape_string($string);
    //return $string;

}




?>
