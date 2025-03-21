<?php

    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT id, password from users WHERE username LIKE '$username'";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);
        
        $row = mysqli_fetch_assoc($result);
        if($row['password'] == $password){
            session_start();
            $_SESSION['id'] = $row['id'];
            header("Location: loginConfirmation.php?username=$username");
        }else{
            header("Location: loginFail.php");
        }
        
    }

?>