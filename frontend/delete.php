<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: delete.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu,Aravind Santha, Anas Eddaoualline--->
<!--Due Date: March 30, 2025-->
<?php
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();//This connects to the database

    $id = $_GET['id'];
/****Sql query to delete the book from the booklist*/
    $sql = "DELETE FROM books WHERE id='$id';";
    mysqli_query($db, $sql);
    header("Location: list.php");
?>