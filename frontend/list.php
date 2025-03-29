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
<!--link to the external css-->
        <link rel ="stylesheet" href="./css/style.css">
<!--Link to the external javascript-->
        <script src="./js/scriptDelete.js"></script>
        <title>Book List</title>
    </head>
    <body>
    <?php
        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();//this connects to the database

        /***Sql query to select from the books */
        $sql = "SELECT * FROM books;";
        $result_set = mysqli_query($db, $sql);//This execute the query to get the books
        confirm_result_set($result_set);//Ensure the query executed correctly
    ?>

        <?php include ("header.php") ?>

        <?php $_SESSION['from'] = 'booklist' ?>
        <main>
 <!--Check if the user is logged in. If not , redirect the user to the login page--->
        <?php if(!isset($_SESSION['id'])){
        header("Location: youMustLogin.php");
        } ?>

        <h1>Book List</h1>
    <!--This is a link to add a new book to the database-->
        <a href="addBook.php">Add Book to Database</a>
        
        <div class="container">
        <!---Loop through each book in the result set and display its information-->
        <?php while($result = mysqli_fetch_assoc($result_set)) { ?>
        <div class="flex-element">
        <!---display the book id, title, author, year, genre---->
            <p><?php echo $result['id']; ?></p>
            <p><strong><?php echo $result['title']; ?></strong></p>
            <p><?php echo $result['author'] ; ?></p>
            <p><?php echo $result['year']; ?></p>
            <p><?php echo $result['genre']; ?></p>
            <!--This is the link to view the book details--->
            <p><a href="view.php?id=<?php echo $result['id']; ?>">View</a></p>
        <!--Link to write a review for the book-->
            <p><a href="addReview.php?bookid=<?php echo $result['id']; ?>">Write a review</a></p>

            <?php 
            /***This ensures to check if the book is in the users favourites */
                $sql2 = "SELECT * FROM favorites WHERE books_id =".$result['id']." AND users_id=".$_SESSION['id'].";";
                $result_set2 = mysqli_query($db, $sql2);
                if(mysqli_num_rows($result_set2)==0){ ?>
                <!---If the book is not in the favourites, offer to add it-->
                    <p><a href="addFavorite.php?bookid=<?php echo $result['id']; ?>">Add to favorites</a></p>
                <?php } else { ?>
                <!--If the book is already in favourites, offer to remove it--->
                    <p><a href="deleteFavorite.php?bookid=<?php echo $result['id']; ?>">Delete from favorites</a></p>
                <?php }      
            ?>
<!---This is the link to delete the book from the list with a confirmation prompt-->
            <p><a href="delete.php?id=<?php echo $result['id']; ?>" onclick="return confirmDelete();">Delete</a></p>
        </div>
        <?php } ?>
        </div>
        </main>
        <?php include ("footer.php") ?>
    </body>
</html>
