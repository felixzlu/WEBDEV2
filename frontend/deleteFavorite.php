<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: deleteFavorite.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu,Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<?php
    require_once('../backend/db_credentials.php');//This contains the database credentials
    require_once('../backend/database.php');
    $db = db_connect();//This establish the connection to the database
/****This gets the book from the database */
    $bookid = $_GET['bookid'];
    session_start();
/***SQl query to delet the book from the user's favourites list */
    $sql = "DELETE FROM favorites WHERE users_id =".$_SESSION['id']." AND books_id = $bookid";
    mysqli_query($db, $sql);

/***This redirects the user */
    if($_SESSION['from']=='favorites'){
        /***If the user was on the favourites page, redirect them back to their favourites list */
        header("Location: myFavorites.php");
    } else{
        header("Location: list.php");
    }
?>