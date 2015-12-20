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
//else $key_id = "(undefined)";

//$key_id = 1;


require_once 'databaselogin.php';

require_once 'nwfilmfundapp2retrieve.php';






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
        <p><strong>Description</strong><br /><input type="submit" value="Page 2" /></p>
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






        <h1>Production description, artist statement and biographies<br /></h1>


        
        
        
        
        <form method="post" action="nwfilmfundapp2submit.php" accept-charset="ISO-8859-1" />

        <p><input type="submit" value="Save and continue" /> Be sure to save first before moving to a new page.<br /></p>

        <img src="images/whitepixel.jpg" width="650" height="1" />




        <p><strong>Production description:</strong> Describe the work that this production will entail. What hurdles are
        unique to this <br /> documentary? Identify the major production challenges and how you will overcome them.
        (character limit: 4000)<br />
        <textarea name="prod_desc" cols="85" rows="20" wrap="soft" value="$prod_desc">$prod_desc</textarea>
        <br /></p><br />

        <p><strong>Production timeline:</strong> List your production milestones in a timeline.
        (character limit: 2000)<br />
        <textarea name="timeline" cols="85" rows="10" wrap="soft" value="$timeline">$timeline</textarea>
        <br /></p><br />

        <p><strong>Artist Statement:</strong> Discuss why you are making this documentary at this time. What drew you to this topic? <br>
        If you have a personal stake in the subject matter, please share it. What do you hope to accomplish in <br>
        making this documentary? (character limit: 4000)<br />
        <textarea name="artist_statement" cols="85" rows="20" wrap="soft" value="$artist_statement">$artist_statement</textarea>
        <br /></p><br />


        <p>
        <strong>Biographies:</strong> Provide bios of the key members of the production team. State what their <br>
        role is in your project. Include as many as you deem appropriate, up to four.</p>


        <table cellpadding=6>

        <tr><td>
        <p>
        Biography 1 (character limit: 1000)<br />
        <textarea name="bio_1" cols="40" rows="10" wrap="soft" value="$bio_1">$bio_1</textarea>
        <br />
        </p>
        </td>

        <td>
        <p>
        Biography 2 (character limit: 1000)<br />
        <textarea name="bio_2" cols="40" rows="10" wrap="soft" value="$bio_2">$bio_2</textarea>
        <br />
        </p>
        </td>
        </tr>

        <tr>
        <td>
        <p>
        Biography 3 (character limit: 1000)<br />
        <textarea name="bio_3" cols="40" rows="10" wrap="soft" value="$bio_3">$bio_3</textarea>
        <br />
        </p>
        
        <td>
        <p>
        Biography 4 (character limit: 1000)<br />
        <textarea name="bio_4" cols="40" rows="10" wrap="soft" value="$bio_4">$bio_4</textarea>
        <br />
        </p>
        </td>
        </tr>

        </table>






        <input type="hidden" name="title" value=$title />
        <input type="hidden" name="key_id" value=$key_id />
        <input type="hidden" name="applicant_lname" value=$applicant_lname />
        <input type="hidden" name="applicant_fname" value=$applicant_fname />
        <input type="hidden" name="applicant_email" value=$applicant_email />


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

