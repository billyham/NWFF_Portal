<?php
session_start();
if (isset($_SESSION['email']))
{
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];
    $key_id = $_SESSION['key_id'];
  
}else{
    header("Location: login.php");
}

require_once 'databaselogin.php';

require_once 'submit_template.php';


if (isset($_POST['key_id'])) {
    $key_id = $_POST['key_id'];
    $_SESSION['key_id'] = $_POST['key_id'];
}

$applicant_fname = $first_name;
$applicant_lname = $last_name;


?>



<!DOCTYPE html>

<html>
    <head>
        <title>NWFF Artist Portal : Film Fund Application</title>
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
        <h1 class="main">Northwest Film Fund</h1>
    </div>

    <div class="Content">

        <p>
            
<?php      







//require_once 'databaselogin.php';

//load pre-existing data into form
require_once 'nwfilmfundapp1retrieve.php';






echo <<<_END



        <table cellpadding=7>

        <tr>
        <td align="center">
        <form method="post" action="nwfilmfundapp1.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong>Overview</strong><br /><input type="submit" value="Page 1" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="nwfilmfundapp2.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Description</strong><br /><input type="submit" value="Page 2" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="nwfilmfundapp3.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Funding</strong><br /><input type="submit" value="Page 3" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="nwfilmfundapp4.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Work Sample</strong><br /><input type="submit" value="Page 4" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="nwfilmfundapp5.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Submit</strong><br /><input type="submit" value="Page 5" /></p>
        </form>
        </td>

        </tr>

        <tr>
        <td colspan="6">
        <img src="images/blankpixel.png" width="700" height="1"/>

        <h2>$title<br /></h2>


        <h1>Contact info and project overview<br /></h1>

        <form method="post" action="nwfilmfundapp1submit.php" accept-charset="ISO-8859-1" />

        <p><input type="submit" value="Save and continue" /> Be sure to save first before moving to a new page.
<br /></p>

        <img src="images/whitepixel.jpg" width="650" height="1" />

        
        <p>Project Title<br />
        <input type="text" name="title" size="50" maxlength="50" value="$title"/><br /></p>

        <p>One sentence description (character limit: 255)<br />
        <textarea name="shortdesc" cols="70" rows="3" wrap="soft">$shortdesc</textarea>
        <br /></p>

        <p>Applicant Address<br />
        <input type="text" name="address" size="50" maxlength="50" value="$address"/><br /></p>

        <p>City
        <input type="text" name="city" size="30" maxlength="30" value="$city" />

        State
        <input type="text" name="state" size="2" maxlength="2" value="$state" />

        Zip
        <input type="text" name="zip" size="5" maxlength="12" value="$zip" /><br /></p>

        <p>Phone Number
        <input type="text" name="phone" size="12" maxlength="12" value="$phone" /><br /></p>

        <p>Director's First Name
        <input type="text" name="director_fname" size="12" maxlength="30" value="$director_fname" />

        Last Name
        <input type="text" name="director_lname" size="12" maxlength="30" value="$director_lname" /><br /></p>

        <p>List additional directors (if any)
        <input type="text" name="additional_directors" size="50" maxlength="120" value="$additional_directors" /><br /></p>

        <p>List all producers
        <input type="text" name="additional_producers" size="50" maxlength="120" value="$additional_producers" /><br /></p><br /><br />

        <p><strong>Synopsis:</strong> Summarize the film's story. Describe it in terms of what the audience will experience. <br>
        (character limit: 4000) <br />
        <textarea name="synopsis" cols="85" rows="20" wrap="soft" value="$synopsis">$synopsis</textarea>
        <br /></p>






        <input type="hidden" name="key_id" value=$key_id />
        <input type="hidden" name="applicant_fname" value=$first_name />
        <input type="hidden" name="applicant_lname" value=$last_name />
        <input type="hidden" name="applicant_email" value=$email />


        <br />



        <input type="submit" value="Save and continue" />
        </form><br />

        <p>

        </p>


        </td>
        </tr>

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

