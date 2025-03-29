<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: logout.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>logout</title>
</head>
<body>
<?php
/***Start a new session */
session_start();
/***This unsets all session to log the user out */
session_unset();
/***This logs the user out */
session_destroy();

include ("header.php");
/***This diplays the message that the user successfully logged out */
echo "successfully signed out.";
include ("footer.php");

?>
</body>
</html>