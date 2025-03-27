<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: view.php-->
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
    <title>View Book</title>
</head>
<body>
    <?php include ("header.php") ?>
    <main>
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


    <?php 
        $sql2 = "SELECT * FROM reviews WHERE books_id = $id";
        $result_set2 = mysqli_query($db, $sql2);

        

        while($result2 = mysqli_fetch_assoc($result_set2)){ ?>

            <?php 
            $sql3 = "SELECT * FROM users WHERE id =" . $result2['users_id'];
            $result_set3 = mysqli_query($db, $sql3);
            $result3 = mysqli_fetch_assoc($result_set3);
            ?>


            <div class="review">
                <p>User <?php echo $result3['username']; ?> wrote:</p>
                <p>Rating: <?php echo $result2['star_rating']?> star(s)</p>
                <p>Comment: <?php echo $result2['review_comment']?></p>
            </div>
        <?php }
    ?>
    </main>
    <?php include ("footer.php") ?>
</body>
</html>