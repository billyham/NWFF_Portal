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

//____________________load pre-existing data into form
require_once 'nwfilmfundapp5retrieve.php';


require_once 'nwfilmfundapp5buildsubmission.php';





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
        <p><strong>Submit</strong><br /><input type="submit" value="Page 5" /></p>
        </form>
        </td>

        </tr>

        <tr>
        <td colspan="6">
        <img src="images/blankpixel.png" width="700" height="1"/>

        <h2>$title<br /></h2>




        <form method="post" action="nwfilmfundapp5submit.php" />




_END;

        if ($submitted === "1"){
            echo '<h1>Your project has been submitted<br /></h1>';
        } else {
            echo '<h1>Submit your project</h1>';
            echo '<p>You won\'t be able to make changes after submission, so make sure you are completely finished.</p>';
            echo '<p><input type="submit" value="Submit Project" /><br /></p>';
        }

        echo <<<_END



        <img src="images/whitepixel.jpg" width="650" height="1" />

        <br />

_END;

        if($submitted === "1"){
        echo "<p>A confirmation email has been sent to you. </p><br />";
        }

        
        echo<<<_END











        <input type="hidden" name="key_id" value=$key_id />
        <input type="hidden" name="applicant_fname" value=$first_name />
        <input type="hidden" name="applicant_lname" value=$last_name />
        <input type="hidden" name="applicant_email" value=$email />


        <br />


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

