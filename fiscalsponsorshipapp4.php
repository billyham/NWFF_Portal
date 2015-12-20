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

        <p>
            
<?php      

require_once 'databaselogin.php';

//____________________load pre-existing data into form
require_once 'fiscalsponsorshipapp4retrieve.php';


$dvdcheck_1 = "";
$linkcheck_1 = "checked = \"checked\"";
$dvdcheck_2 = "";
$linkcheck_2 = "checked = \"checked\"";
$dvdcheck_3 = "";
$linkcheck_3 = "checked = \"checked\"";



if ($worksamp_1_dvd === "yes") {
    $dvdcheck_1 = "checked=\"checked\"";
    $linkcheck_1 = "";
}

if ($worksamp_2_dvd === "yes") {
    $dvdcheck_2 = "checked=\"checked\"";
    $linkcheck_2 = "";
}

if ($worksamp_3_dvd === "yes") {
    $dvdcheck_3 = "checked=\"checked\"";
    $linkcheck_3 = "";
}




echo <<<_END



        <table cellpadding=7>

        <tr>
        <td align="center">
        <form method="post" action="fiscalsponsorshipapp1.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Overview<br /><input type="submit" value="Page 1" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="fiscalsponsorshipapp2.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Description</strong><br /><input type="submit" value="Page 2" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="fiscalsponsorshipapp3.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Funding</strong><br /><input type="submit" value="Page 3" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="fiscalsponsorshipapp4.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong>Work Sample</strong><br /><input type="submit" value="Page 4" /></p>
        </form>
        </td>

        <td align="center">
        <form method="post" action="fiscalsponsorshipapp5.php" />
        <input type="hidden" name="key_id" value=$key_id />
        <p><strong class="white">Submit</strong><br /><input type="submit" value="Page 5" /></p>
        </form>
        </td>

        </tr>

        <tr>
        <td colspan="6">
        <img src="images/blankpixel.png" width="700" height="1"/>

        <h2>$title<br /></h2>


        <h1>Work sample description and location</h1>
        <p>The work sample should be clips from one to three projects. Rough edits of the project <br />
        you are submitting for consideration are encouraged, although prior work from the director <br />
        is valuable as well. The total running time of all samples should be no more than 20 minutes.<br />
        It is strongly recommended that you submit excerpts of work (or complete films in<br />
        the case of shorts) rather than a demo reel or showreel (i.e. a heavily edited <br />
        sampling from many projects). If necessary, indicate in the work sample description <br />
        a starting and ending timecode, if the intended work sample clip is an excerpt <br />
        of a longer video. If you are providing a link that is password protected, please provide <br />
        the password in the sample description.



        <form method="post" action="fiscalsponsorshipapp4submit.php" accept-charset="ISO-8859-1" />




        <p><input type="submit" value="Save and continue" /> Be sure to save first before moving to a new page.<br /></p>

        <img src="images/whitepixel.jpg" width="650" height="1" />




        <p><strong>Sample 1:</strong> </p>
        <table cellpadding=0>
        <tr>
        <td>
        
        <p>Title<br />
        <input type="text" name="worksamp_1_title" size="60" maxlength="120" value="$worksamp_1_title"/><br /></p>
        </td>

        <td>
        <img src="images/blank.png" height=1 width=10 />

        <td>
        <p>Running time<br />
        <input type="text" name="worksamp_1_trt" size="12" maxlength="12" value="$worksamp_1_trt"/><br /></p>
        </td>
        </tr>
        </table>

        <p>Sample description (character limit: 800)<br />
        <textarea name="worksamp_1_desc" cols="70" rows="5" wrap="soft" value="$worksamp_1_desc">$worksamp_1_desc</textarea>
        <br /></p>



        <p>
        Provide the work sample either with a link to the sample or deliver a DVD to NWFF.<br />

        <input type="radio" name="worksamp_1_dvd" value="no" $linkcheck_1 />Online Link provided<br />
        <input type="radio" name="worksamp_1_dvd" value="yes" $dvdcheck_1 />DVD Sample will be mailed<br />

        Sample Link: <input type="text" name="worksamp_1_link" size="63" maxlength="300" value="$worksamp_1_link"/><br /><br />

        
        If mailing a DVD, deliver it to: NW Film Fund, Northwest Film Forum, 1515 12th Ave, Seattle, WA 98122<br />
        Label the DVD clearly with the applicant name, project title and the work sample title
        <br /></p><br />





        <p><strong>Sample 2:</strong> </p>
        <table cellpadding=0>
        <tr>
        <td>
        
        <p>Title<br />
        <input type="text" name="worksamp_2_title" size="60" maxlength="120" value="$worksamp_2_title"/><br /></p>
        </td>

        <td>
        <img src="images/blank.png" height=1 width=10 />

        <td>
        <p>Running time<br />
        <input type="text" name="worksamp_2_trt" size="12" maxlength="12" value="$worksamp_2_trt"/><br /></p>
        </td>
        </tr>
        </table>

        <p>Sample description (character limit: 800)<br />
        <textarea name="worksamp_2_desc" cols="70" rows="5" wrap="soft" value="$worksamp_2_desc">$worksamp_2_desc</textarea>
        <br /></p>


        <p>
        Provide the work sample either with a link to the sample or deliver a DVD to NWFF.<br />

        <input type="radio" name="worksamp_2_dvd" value="no" $linkcheck_2 />Online Link provided<br />
        <input type="radio" name="worksamp_2_dvd" value="yes" $dvdcheck_2 />DVD Sample will be mailed<br />

        Sample Link: <input type="text" name="worksamp_2_link" size="63" maxlength="300" value="$worksamp_2_link"/><br /><br />

        <br /></p><br />





        <p><strong>Sample 3:</strong> </p>
        <table cellpadding=0>
        <tr>
        <td>
        
        <p>Title<br />
        <input type="text" name="worksamp_3_title" size="60" maxlength="120" value="$worksamp_3_title"/><br /></p>
        </td>

        <td>
        <img src="images/blank.png" height=1 width=10 />

        <td>
        <p>Running time<br />
        <input type="text" name="worksamp_3_trt" size="12" maxlength="12" value="$worksamp_3_trt"/><br /></p>
        </td>
        </tr>
        </table>

        <p>Sample description (character limit: 800)<br />
        <textarea name="worksamp_3_desc" cols="70" rows="5" wrap="soft" value="$worksamp_3_desc">$worksamp_3_desc</textarea>
        <br /></p>


        <p>
        Provide the work sample either with a link to the sample or deliver a DVD to NWFF.<br />

        <input type="radio" name="worksamp_3_dvd" value="no" $linkcheck_3 />Online Link provided<br />
        <input type="radio" name="worksamp_3_dvd" value="yes" $dvdcheck_3 />DVD Sample will be mailed<br />

        Sample Link: <input type="text" name="worksamp_3_link" size="63" maxlength="300" value="$worksamp_3_link"/><br /><br />

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

