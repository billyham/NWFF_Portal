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




if (isset($_POST['key_id'])) $key_id = $_POST['key_id'];


require_once 'databaselogin.php';

//load pre-existing data into form
require_once 'nwfilmfundapp3retrieve.php';






echo <<<_END



        <table cellpadding=7>

        <tr>
        <td align="center">
        <form method="post" action="nwfilmfundapp1.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Overview<br /><input type="submit" value="Page 1" /></p>
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
        <p><strong>Funding</strong><br /><input type="submit" value="Page 3" /></p>
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


        <h1>Funding and distribution plan<br /></h1>

        <form method="post" action="nwfilmfundapp3submit.php" accept-charset="ISO-8859-1" />

        <p><input type="submit" value="Save and continue" /> Be sure to save first before moving to a new page.<br /></p>

        <img src="images/whitepixel.jpg" width="650" height="1" />




        <p><strong>Funding narrative:</strong> Provide a descriptive plan of how you intend to fund this documentary production.
        <br />Include a reasoning of how and why you can expect this production to obtain the
        resources it needs. <br />
        (character limit: 4000)<br />
        <textarea name="funding_plan" cols="85" rows="20" wrap="soft" value="$funding_plan">$funding_plan</textarea>
        <br /></p><br />

        <p><strong>Funds secured to date:</strong> Indicate the funds that you have secured at this time. (character limit: 2000)<br />
        <textarea name="funds_secured" cols="85" rows="10" wrap="soft" value="$funds_secured">$funds_secured</textarea>
        <br /></p><br />

        <p><strong>Distribution strategy:</strong> How will your documentary be released? Provide your intended medium and
        describe the <br />strategy that you will use to acheive your distribution goals. (character limit: 4000)<br />
        <textarea name="distribution" cols="85" rows="20" wrap="soft" value="$distribution">$distribution</textarea>
        <br /></p><br />

        <p><strong>Budget</strong> Broadly indicate the project expenses. (character limit: 4000)<br />
        <textarea name="budget" cols="85" rows="20" wrap="soft" value="$budget">$budget</textarea>
        <br /></p><br />










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

