<?php
session_start();
?>

<header>
    <nav class ="navbar">
        <a href="index.php">HOME</a>
        <a href="browse.php">BROWSE</a>
        <a href="registration.php">REGISTRATION</a>
        <a href="search.php">SEARCH</a>
        <a href="myFavorites.php">MY FAVORITES</a>
        <a href="list.php">BOOK LIST</a>

        <?php if(isset($_SESSION['id'])){ ?>
        <a href="logout.php">LOGOUT</a>
        <?php } else { ?>
        <a href="login.php">LOGIN</a>
        <?php } ?>

    </nav>
</header>

