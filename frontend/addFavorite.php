<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location: youMustLogin.php");
    }

    $bookid = $_GET['bookid'];

    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    $sql = "INSERT INTO favorites (users_id,books_id) VALUES (".$_SESSION['id'].",$bookid)";

    $result = mysqli_query($db, $sql);
    confirm_result_set($result);

    header("Location: addFavoriteConfirmation.php");

?>