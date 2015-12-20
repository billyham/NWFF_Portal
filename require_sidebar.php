<?php

echo "
    <div class=\"Sidebar\">
        <p>
    <h2>User Profile</h2>
        </p>";
?>


<?php

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
    $password = $_SESSION['password'];
    $first_name = $_SESSION['first_name'];
    $last_name = $_SESSION['last_name'];

    echo"
        <p>
            Welcome $first_name $last_name<br />
        </p>";
    
    

//        <p>
//            <a class=\"stronglink\" href=\"updateprofile.php\">Update user profile</a><br />
//                
//        </p>";
            

                
           
                
//        <div class=\"SubSidebar\">
//                
//            <p>
//                <strong>History of grant submissions</strong><br />
//        
//                This is your criminal record.<br />
//            </p>
//                
//        </div>
              

echo"<p>
            <a href=logout.php>log out</a>
        </p>";
    
} else {
    
    echo"<p> <a href=\"login.php\">login</a> </p>";
}


echo "</div>";

?>
