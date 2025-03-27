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
    <link rel ="stylesheet" href="./css/style.css">
    <script src= "./js/script.js"></script>
</head>
<body>
    <?php include ("header.php") ?>
    <?php $_SESSION['from'] = 'favorites' ?>
    <main>

    <?php if(!isset($_SESSION['id'])){
        header("Location: youMustLogin.php");
    } ?>

    <h1>My Favorites</h1>

    <?php
        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();
        $sql = "SELECT b.id id,b.title title,b.author author FROM favorites f JOIN books b ON f.books_id = b.id WHERE f.users_id =".$_SESSION['id'].";";
        $result_set = mysqli_query($db, $sql);
    ?>

    <table>
        <tr>
            <td>title</td>
            <td>author</td>
            <td>&nbsp</td>
        </tr>
        <?php while($result = mysqli_fetch_assoc($result_set)) { ?>
        <tr>
            <td><?php echo $result['title']?></td>
            <td><?php echo $result['author']?></td>
            <td><a href="deleteFavorite.php?bookid=<?php echo $result['id']?>">Remove favourite</a></td>
        </tr>    
        <?php } ?>
    </table>



    </main>
    <?php include ("footer.php") ?>
</body>
</html>