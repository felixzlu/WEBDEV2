<?php
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    $bookid = $_GET['bookid'];
    session_start();

    $sql = "DELETE FROM favorites WHERE users_id =".$_SESSION['id']." AND books_id = $bookid";
    mysqli_query($db, $sql);


    if($_SESSION['from']=='favorites'){
        header("Location: myFavorites.php");
    } else{
        header("Location: list.php");
    }
?>