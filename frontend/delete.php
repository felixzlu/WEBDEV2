<?php
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    $id = $_GET['id'];

    $sql = "DELETE FROM books WHERE id='$id';";
    mysqli_query($db, $sql);
    header("Location: list.php");
?>