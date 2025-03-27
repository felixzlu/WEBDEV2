<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addBook2.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<?php

    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];

        $sql = "INSERT INTO books (title,author,year,genre,description) VALUES ('$title','$author','$year','$genre','$description')";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        header("Location: addBookConfirmation.php?title=$title");
    }

?>