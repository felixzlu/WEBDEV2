<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: registration2.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<?php
/****Database credentials and conenction functions */
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();//This establish the connection to the database

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];//username entered by the user
        $password = $_POST['password'];//The password entered by the user
        $email = $_POST['email'];//email entered by the user
/***Sql query to insert the new user into the user's table */
        $sql = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        /***Passing the username to confirm their registration */
        header("Location: registrationConfirmation.php?username=$username");
    }

?>