<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: list.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu,Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="./css/style.css">
        <script src="./js/scriptDelete.js"></script>
        <title>Book List</title>
    </head>
    <body>
    <?php
        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();
        $sql = "SELECT * FROM books;";
        $result_set = mysqli_query($db, $sql);
        confirm_result_set($result_set);
    ?>

        <?php include ("header.php") ?>

        <?php $_SESSION['from'] = 'booklist' ?>
        <main>

        <?php if(!isset($_SESSION['id'])){
        header("Location: youMustLogin.php");
        } ?>

        <h1>Book List</h1>
        <a href="addBook.php">Add Book to Database</a>
        
        <div class="container">
        
        <?php while($result = mysqli_fetch_assoc($result_set)) { ?>
        <div class="flex-element">
            <p><?php echo $result['id']; ?></p>
            <p><strong><?php echo $result['title']; ?></strong></p>
            <p><?php echo $result['author'] ; ?></p>
            <p><?php echo $result['year']; ?></p>
            <p><?php echo $result['genre']; ?></p>
            <p><a href="view.php?id=<?php echo $result['id']; ?>">View</a></p>
            <p><a href="addReview.php?bookid=<?php echo $result['id']; ?>">Write a review</a></p>

            <?php 
                $sql2 = "SELECT * FROM favorites WHERE books_id =".$result['id']." AND users_id=".$_SESSION['id'].";";
                $result_set2 = mysqli_query($db, $sql2);
                if(mysqli_num_rows($result_set2)==0){ ?>
                    <p><a href="addFavorite.php?bookid=<?php echo $result['id']; ?>">Add to favorites</a></p>
                <?php } else { ?>
                    <p><a href="deleteFavorite.php?bookid=<?php echo $result['id']; ?>">Delete from favorites</a></p>
                <?php }      
            ?>

            <p><a href="delete.php?id=<?php echo $result['id']; ?>" onclick="return confirmDelete();">Delete</a></p>
        </div>
        <?php } ?>
        </div>
        </main>
        <?php include ("footer.php") ?>
    </body>
</html>
