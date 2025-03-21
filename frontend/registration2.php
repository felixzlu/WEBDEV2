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