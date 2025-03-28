<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addBook2.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<?php
/***This includes the database credentails and database conenction functionalities*/
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();//This establisht the database connection
//This will check if the form was submitted via POST method.
    if($_SERVER['REQUEST_METHOD'] == 'POST'){

       //Retrive form data from the POST request
        $title = $_POST['title'];
        $author = $_POST['author'];
        $year = $_POST['year'];
        $genre = $_POST['genre'];
        $description = $_POST['description'];
/****This is the sql query to insert new books into the books table */
        $sql = "INSERT INTO books (title,author,year,genre,description) VALUES ('$title','$author','$year','$genre','$description')";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);//This will check if the query is successful
        /**THis will redirect to the confirmation page with the book title as a URL parameter */
        header("Location: addBookConfirmation.php?title=$title");
    }

?>