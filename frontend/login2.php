<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: login2.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->
<?php
/****Database credentials and functions to connect to the database */
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();//establish connection to the database

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
/***Retrive the username and password from the post data */
        $username = $_POST['username'];
        $password = $_POST['password'];
/****Sql query to select the user record by the provided username */
        $sql = "SELECT id, password from users WHERE username LIKE '$username'";
        $result = mysqli_query($db, $sql);
        confirm_result_set($result);//confirm the query executed successfully
    /****Check if the user entered password matches the password in the database */
        $row = mysqli_fetch_assoc($result);
    /****This checks if the entered password matches the password in the database */
        if($row['password'] == $password){
    /***If the password matches, start a session and store the user's ID in the session */
            session_start();
            $_SESSION['id'] = $row['id'];
    /****Redirect to a confirmation page with the username as a URL parameter */
            header("Location: loginConfirmation.php?username=$username");
        }else{
    /****If the passwords do not match, redirect to the login failure page */
            header("Location: loginFail.php");
        }
        
    }

?>