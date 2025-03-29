<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: myFavorites.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse</title>
<!--link to the external stylesheet css---->
    <link rel ="stylesheet" href="./css/style.css">
   <!--link to the external javascript ---->
    <script src= "./js/script.js"></script>
</head>
<body>
    <?php include ("header.php") ?>
<!---Set session variable to identify the current page as favourites-->
    <?php $_SESSION['from'] = 'favorites' ?>
    <main>
<!--This checks if the user is logged in, if not it redirects to the login page-->
    <?php if(!isset($_SESSION['id'])){
        header("Location: youMustLogin.php");
    } ?>

    <h1>My Favorites</h1>

    <?php
    /***include the database credentials and connect to the database */
        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();
    /****The sql query to retrive the user's favourite books from the database */
        $sql = "SELECT b.id id,b.title title,b.author author FROM favorites f JOIN books b ON f.books_id = b.id WHERE f.users_id =".$_SESSION['id'].";";
        $result_set = mysqli_query($db, $sql);
    ?>

    <div class="container">
        <?php while($result = mysqli_fetch_assoc($result_set)) { ?>
        <div class="flex-element">
    <!--Display book title and author---->
            <p><?php echo $result['title']?></p>
            <p><?php echo $result['author']?></p>
    <!--Link to remove the book from favourites--->
            <p><a href="deleteFavorite.php?bookid=<?php echo $result['id']?>">Remove favourite</a></p>
        </div>    
        <?php } ?>
        </div>



    </main>
    <?php include ("footer.php") ?>
</body>
</html>