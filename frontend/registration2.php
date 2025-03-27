<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: registration2.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<?php

    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = "INSERT INTO users (username,password,email) VALUES ('$username','$password','$email')";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        header("Location: registrationConfirmation.php?username=$username");
    }

?>