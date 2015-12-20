<?php
session_start();

?>

<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <LINK href="stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <img class="top" src="images/blackpixel.jpg" border="0" alt="logo" width="800" height="120" />

        <a href="http://www.nwfilmforum.org"><img src="images/logo308x106.png" border="0" alt="logo" width="308" height="106" /></a>
        <h1 class="right">Northwest Film Forum Artist Portal</h1>



        <?php
        require_once "require_sidebar.php";
        ?>




        <div>
            <h1 class="main">Artist Portal Home</h1>
        </div>

        <div class="Content">
            <h2>Available Grant Programs</h2>
            <p>
                We make these programs available to support film artists in the Northwest. 
                Each program has its own requirements for eligibility and submission. 
                For questions, contact the Studio Director: dave at nwfilmforum.org  /  206-329-2629

                
            </p>

            <p><a class="stronglink" href="nwfilmfund.php"> Northwest Film Fund</a>
                The Film Fund supports Northwest documentary film projects at 
                any stage of completion. Our 2013 fund will offer at least
                one award of $10,000 and a package of services including 80 hours of 
                post-production services with leading Seattle post houses, legal 
                consultation and a meeting with KCTS-Channel 9. 

            </p>

<!--            <p><a class="stronglink" href="residency.php">Artist Residency</a>
                An Artist Residency is a time for planting seeds, 
                for shaping inspiration, and going further down creative paths. In the 
                spring (May 18-20) and fall (mid-November) of 2012, the Film Forum will 
                launch the first phase of its Artist Residency program.
            </p>-->

<!--            <p><strong>Short Film Production</strong> 
                A $500 cash grant to encourage the creation of original short films for Washington State film artists. 
                Also provided are in-kind services 
                from the Film Forum. More info coming soon.
            </p>-->

            <p><a class="stronglink" href="fiscalsponsorship.php"> Fiscal Sponsorship</a>
                Extends Northwest Film Forum's non-profit umbrella to your production. 
                With sponsorship, many grants that fund only non-profits become 
                available to your project, and individual contributions to your 
                production become tax-deductible. (This program does NOT provide 
                financing)
            <p/>

<!--            <p><strong>Equipment Access Grants</strong>
                Provides free access to the Film Forum's production gear and edit suites. Awards are granted
                every three months, with quarterly application deadlines. More info coming soon

        </p>-->





    </div>


    <?php
//    if (isset($_SESSION['email'])) {
//        $email = $_SESSION['email'];
//        $password = $_SESSION['password'];
//        $first_name = $_SESSION['first_name'];
//        $last_name = $_SESSION['last_name'];
//
//        echo
//        "
//
//
//
//    <div class=\"Content\">
//        <h2>Grant Applications in progress</h2>";
//
//
//        require_once 'databaselogin.php';
//        
//        //list of current projects in drop down menu
//        $db_server = mysql_connect($db_hostname, $db_username, $db_password);
//
//        if (!$db_server) die("Unable to connecto to MySQL: ". mysql_error());
//        mysql_select_db($db_database) or die("Unable to select database; " . mysql_error());
//
//        $query = "select * from portal.fiscal where applicant_email='$email'";
//        $result = mysql_query($query);
//
//        if (!$result) die ("Database access failed: " . mysql_error());
//
//
//        //test if any projects exist
//        if (mysql_num_rows($result)){
//            
//             echo '<form method="get" action="gotoopenproject.php" />';
//
//             echo '<p>Project Title<br /><br />';
//             
//             echo '<select name="key_id" size="1">';
//
//            //if projects exist, show drop down menu
//
//            $rows = mysql_num_rows($result);                                        //count of rows
//
//            for ($j = 0 ; $j < $rows ; ++$j)                                   //loop
//            {
//
//                $myKey_id = mysql_result($result,$j,'key_id');
//                $myTitle = mysql_result($result,$j,'title');
//                $myEmail = mysql_result($result,$j,'applicant_email');
//                $submitted = mysql_result($result,$j,'submitted');
//
//                if ($submitted != "1"){
//                    echo "<option value=$myKey_id>$myTitle</option>";
//                }
//
//            }
//
//            mysql_close($db_server);
//
//echo <<<_END
//
//        <br /></p>
//        </select>
//
//        <input type="hidden" name="email" value=$email /><br />
//        <p>
//        <input type="submit" value="Continue Application" />
//        </form><br /></p><br />
//
//_END;
//        
//        
//}else{
//    
//    echo'<p>No current applications are in progress</p>';
//}
//
//
//        echo
//    "</div>";
//    }
        ?>
        
    <div class="SidebarRight">

        <p>
            The NW Film Fund 2011 receipient is Michael Palmieri and Donal Mosher's <strong>OFF LABEL</strong>.
        </p>
        
        <img src="images/offlabel.jpg" width="200">
            
        <p>
            The film is being produced by Film Science (Anish Savjani, Vincent Savino) and 
            Wishbone Films (Michael Palmieri, Donal Mosher). <span class="filmtitle">Off Label </span>presents an alternatively 
            tragic and bleakly comic road trip through the methods and madness of pharmaceuticals 
            in our culture. 
        </p>

        <p>
            Our Northwest Film Fund inaugural award will provide <span class="filmtitle">Off Label</span>  with $11,000 in cash, 80 hours of post 
            production services from leading Seattle vendors, legal consultation, and 
            meetings with KCTS and the Seattle International Film Festival.
        </p>
        <p>    
            Read more about the winning film <a class="stronglink" href="http://www.offlabelfilm.com">here</a>.
        </p>

    </div>






</body>

</html>

