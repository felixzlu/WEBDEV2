<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: header.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu,Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<?php
session_start();
?>

<header>
    <!---This provides the link to the Home, Browse, Search, My favourites, Book list, Registration 
    on the home page-->
    <nav class ="navbar">
        <a href="index.php">HOME</a>
        <a href="browse.php">BROWSE</a>
        <a href="search.php">SEARCH</a>
        <a href="myFavorites.php">MY FAVORITES</a>
        <a href="list.php">BOOK LIST</a>
        <a href="registration.php">REGISTRATION</a>
<!----This is a conditional display of login/logout links based on session status-->
        <?php if(isset($_SESSION['id'])){ ?>
        <!--If the user is logged in, show the logout link-->
        <a href="logout.php">LOGOUT</a>
        <?php } else { ?>
        <a href="login.php">LOGIN</a>
        <?php } ?>

    </nav>
</header>

