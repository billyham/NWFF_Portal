<?php
session_start();


?>

<!DOCTYPE html>

<html>
    <head>
        <title>NWFF Artist Portal : Fiscal Sponsorship</title>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> -->
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <LINK href="stylesheet.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <img class="top" src="images/blackpixel.jpg" border="0" alt="logo" width="800" height="120" />

        <a href="http://www.nwfilmforum.org"><img src="images/logo308x106.png" border="0" alt="logo" width="308" height="106" /></a>
        <h1 class="right">Northwest Film Forum Artist Portal</h1>







        <?php
        
        require_once "databaselogin.php";
        
        require_once "require_sidebar.php";
        
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


            <h2>Eligibility:</h2>

            <p>
                To be eligible for consideration, the production, as represented by the 
                Project Director or the Project Producer (and Chief Editor for post-production 
                grants) must:

            <ul>1. Maintain active NWFF membership.</ul>
            <ul>2. Demonstrate a clear commitment to the production, which must be non-commercial 
                in nature and must contribute artistically to the local film community.</ul>
            <ul>3. Present a detailed proposal, following proposal guidelines.</ul>
            <ul>4. Present an artistic work sample that best represents the proposed production.</ul>
            <ul>5 Be a Washington State resident.</ul>
        </p>





        <p>
            <a class="stronglink" href="fiscalsponsorshipappbegin.php">Begin an application or continue an existing one</a><br />

            For questions, contact the Studio Director: dave at nwfilmforum.org  /  206-329-2629
        </p>

        <p>
            <a href="portal.php">Back to portal</a>
        </p>


    </div>

        
        
    <div class="SidebarRight">

        <p>
            <strong>Big Joy</strong> Stephen Silha and Eric Slade's documentary about poet and filmmaker 
            James Broughton nears completion.  <a class="stronglink" href="http://bigjoy.org/news/">More info</a>
        </p>

        <img src="images/bigjoy.jpg" width="200">


    </div>





</body>

</html>

