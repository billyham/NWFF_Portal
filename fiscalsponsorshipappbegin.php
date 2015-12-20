<?php
session_start();
if (isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
  
}else{
    header("Location: login.php");
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>NWFF Artist Portal : Fiscal Sponsorship Application</title>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <LINK href="stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <img class="top" src="images/blackpixel.jpg" border="0" alt="logo" width="800" height="120" />

        <a href="http://www.nwfilmforum.org"><img src="images/logo308x106.png" border="0" alt="logo" width="308" height="106" /></a>
        <h1 class="right">Northwest Film Forum Artist Portal</h1>






<?php
require_once 'require_sidebar.php';
?>



    <div>
        <h1 class="main">Fiscal Sponsorship</h1>
    </div>

    <div class="Content">
        <h2>Description</h2>
        <p>
            Non-profit sponsorship extends Northwest Film Forum's non-profit umbrella to your production. 
            With sponsorship, many grants that fund only non-profits become available 
            to your project, and individual contributions to your production become 
            tax-deductible. (This program does NOT provide financing)
        </p>




        <p>
            
<?php      



require_once 'databaselogin.php';

echo <<<_END



        <table cellpadding=20>


        <tr>
        <td>

        
        <h2>$first_name $last_name<br /></h2>

        <h1>

        Project Application <br />
          </h1>
        </td></tr>
        
        <tr><td valign="top">


        <p>
        To begin your application, enter it's title:<br /><br />
        </p>


        <form method="post" action="fiscalsponsorshipappbeginsubmit.php" accept-charset="ISO-8859-1"/>

        <p>Project Title<br /><br />
        <input type="text" name="title" size="40" maxlength="120"/><br /></p>

_END;





        echo '<input type="hidden" name="applicant_email" value='.$email.' /><br />';
        
echo <<<_END


        <input type="submit" value="Create New Project Application" />
        </form><br />

        </td>








        <td valign="top">
        <p>
        Or continue working on an a current project <br /><br />
        </p>
_END;


        //check if there exist current projects
        $db_server = mysql_connect($db_hostname, $db_username, $db_password);

        if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
        mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

        $query = "select * from billyx_portal.fiscal where applicant_email='$email'";
        $result = mysql_query($query);

        if (!$result) die ("Database access failed: " . mysql_error());

        
        //show dropdown list of existing projects, only if they exist
if (mysql_num_rows($result) > 0) {
    $rows = mysql_num_rows($result);                                        
    
    //create a form and a drop down menu
    
    echo '<p>Project Title<br /></p>';    
    
    echo '<form method="post" action="fiscalsponsorshipapp1.php" accept-charset="ISO-8859-1" />';

    echo '<p><select name="key_id" size="1">';



    for ($j = 0; $j < $rows; ++$j) {                                   //loop

        $myKey_id = mysql_result($result, $j, 'key_id');
        $myTitle = mysql_result($result, $j, 'title');
        $myEmail = mysql_result($result, $j, 'applicant_email');
        $submitted = mysql_result($result, $j, 'submitted');

        if ($submitted != "1") {
            echo "<option value=$myKey_id>$myTitle</option>";
        }
    }

    mysql_close($db_server);

        echo <<<_END

        </select></p>

        <input type="hidden" name="email" value=$email /><br />
        <p>
        <input type="submit" value="Continue Application" />
        </form><br /></p><br />

_END;
        
}else{
    echo'<p><strong>No current applications are in progress</strong></p>';
}
        

        //list of projects that have been completed
        $db_server = mysql_connect($db_hostname, $db_username, $db_password);

        if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
        mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());

        $query = "select * from billyx_portal.fiscal where applicant_email='$email' AND submitted='1'";
        $result = mysql_query($query);

        if (!$result) die ("Database access failed: " . mysql_error());


        $rows = mysql_num_rows($result);                                        //count of rows

        if ($rows == 1 ) {
            echo  '<p>This project has been completed and submitted:</p>';
        } else if ($rows > 1) {
            echo  '<p>These projects have been completed and submitted:</p>';
        }

        for ($j = 0 ; $j < $rows ; ++$j)                                   //loop
        {

            $myKey_id = mysql_result($result,$j,'key_id');
            $myTitle = mysql_result($result,$j,'title');
            $myEmail = mysql_result($result,$j,'applicant_email');

            echo "<strong>$myTitle</strong><br />";

        }

        mysql_close($db_server);




echo <<<_END




        </td></tr>
        </table>



_END;
?>
        
            
        </p>

        <p>
            <a href="portal.php">Back to portal</a>
        </p>


    </div>






</body>

</html>

