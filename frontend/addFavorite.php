<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addfavourite.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<?php
    session_start();//This starts the session to track user authentication
/****This ensures the user is logged in. If not, it redirects to the login page.  */
    if(!isset($_SESSION['id'])){
        header("Location: youMustLogin.php");
    }
/***Retrieve the book ID from the database */
    $bookid = $_GET['bookid'];

    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();//This establish the database connection
/***This is a SQl query to insert the book into the user;s favourites list */
    $sql = "INSERT INTO favorites (users_id,books_id) VALUES (".$_SESSION['id'].",$bookid)";
/****THis will execute the query and store the result */
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);//This will confirm that the query was executed succesfully

    header("Location: list.php");

?>