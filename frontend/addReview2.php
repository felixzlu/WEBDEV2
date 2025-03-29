<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addReview2.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu,Aravind Santha, Anas Eddaoualline--->
<!--Due Date: March 30, 2025-->

<?php 
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();//This connects to the database

/***This starts the session to access user session data */
    session_start();
/****This code posts the comment and rating entered by the user to the database * */
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $comment = $_POST['comment'];
        $rating = $_POST['rating'];
/***This sql query adds the user reviews into the database */
        $sql = "INSERT INTO reviews (users_id, books_id, star_rating, review_comment) VALUES ('" . $_SESSION['id'] . "', '" . $_SESSION['bookid'] . "', '$rating', '$comment')";
/****This will execute the query */
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        header("Location: addReviewConfirmation.php");
    }
?>