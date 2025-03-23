<?php 
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $comment = $_POST['comment'];
        $rating = $_POST['rating'];

        $sql = "INSERT INTO reviews (users_id, books_id, star_rating, review_comment) VALUES ('" . $_SESSION['id'] . "', '" . $_SESSION['bookid'] . "', '$rating', '$comment')";

        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        header("Location: addReviewConfirmation.php");
    }
?>