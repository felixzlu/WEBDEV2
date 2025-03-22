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
session_start();

session_unset();

session_destroy();

include ("header.php");
echo "successfully signed out.";
include ("footer.php");

?>
</body>
</html>