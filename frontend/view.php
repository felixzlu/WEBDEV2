<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>View Book</title>
</head>
<body>
    <?php include ("header.php") ?>

    <?php
        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();

        $id = $_GET['id'];

        $sql = "SELECT * FROM books WHERE id='$id';";
        $result_set = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($result_set);
    ?>
    <h1><?php echo $result['title']; ?></h1>
    <p>Author: <?php echo $result['author']; ?></p>
    <p>Year: <?php echo $result['year']; ?></p>
    <p>Genre: <?php echo $result['genre']; ?></p>
    <p>Description: <?php echo $result['description']; ?></p>
    <a href="addReview.php?bookid=<?php echo $id; ?>">Write a review</a>
    <?php include ("footer.php") ?>
</body>
</html>