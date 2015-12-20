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




        <div class="Sidebar">


        </div>



        <div>
            <h1 class="main">Artist Portal Login</h1>
        </div>

        <div class="Content">


            <table cellpadding=20>


                <tr>
                    <td colspan=2>


                        <h1>
                            Thank you for your interest in Northwest Film Forum's artist support programs <br />
                        </h1>

                    </td></tr>

                <tr><td>


                        <p>
                            <strong>Begin by creating a user login:</strong><br /><br />
                        </p>


                        <form method="post" action="createlogin.php" />

                        <p>Applicant First Name
                            <input type="text" name="first_name" /><br /></p>

                        <p>Applicant Last Name
                            <input type="text" size="22" name="last_name" /><br /></p>

                        <p>Applicant Email
                            <input type="text" size="29" name="uetemp" /><br /></p>

                        <p>Choose a Password
                            <input type="text" size="12" name="pwtemp" /><br /></p>



                        <input type="submit" value="Submit User Registration" />
                        </form><br />

                    </td>






                    <td valign="top">

                        <p>
                            <strong>Existing user login:</strong><br /><br />
                        </p>


                        <form method="post" action="authenticate3.php" />

                        <p>Applicant Email
                            <input type="text" size="29" name="uetemp" /><br /></p>

                        <p>Password
                            <input type="text" size="12" name="pwtemp" /><br /></p>



                        <input type="submit" value="Login" />
                        </form><br />


                    </td></tr>
            </table>

        </div>



    </body>

</html>

