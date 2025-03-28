<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: browse.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu,Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<?php
//This php function includes and executes the specified file only once during the script execution
    require_once('../backend/db_credentials.php');//This contains the database connection credentials
    require_once('../backend/database.php');//This contains the database logic 
    $db = db_connect();//This is used to establish a connection to the database

    //This will fetch the books from the database that are added by date in ascending order
    $sql= "SELECT * FROM books ORDER BY date_added ASC LIMIT 5";
    $result_set = mysqli_query($db, $sql); 
//This will fetch the books that are top rated.
    $sql2 = "SELECT b.id,b.title, b.description, AVG(r.star_rating) AS avg_rating FROM books b JOIN reviews r ON b.id = r.books_id GROUP BY b.id, b.title, b.description ORDER BY avg_rating DESC LIMIT 5;";
    $result_set2 = mysqli_query($db,$sql2);


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Browse</title>
        <link rel ="stylesheet" href= "./css/style.css">
        <script src="./js/script.js"></script>
    </head>
    <body>
        <?php include ("header.php"); ?>
        <?php
        if (!isset($_SESSION['id'])) {
            header("Location: youMustLogin.php");
            exit();
        }
    ?>
        <main>
            <!--Wrapper for all sections-->
            <div class ="browse-container">
                <!--Wrapper for new additions section-->
                    <h2>New Additions</h2>
                        <div class="container">
                            
                                <?php while($row=mysqli_fetch_assoc($result_set)) {?>
                                <div class="flex-element">
                                    <p><strong><?php echo $row['title'] ?></strong></p>
                                    <p><?php echo $row['description'] ?></p>
                                    <p><a href="view.php?id=<?php echo $row['id']; ?>">View</a></p>
                                </div>
                                <?php } ?>
                        </div>

                        <h2>Overall Top picks</h2>
                        <div class="container">

                            <?php while($row=mysqli_fetch_assoc($result_set2)) {?>
                            <div class="flex-element">
                                <p><strong><?php echo $row['title'] ?></strong></p>
                                <p><?php echo $row['description'] ?></p>
                                <p>Rating: <?php echo $row['avg_rating'] ?></p>
                                <p><a href="view.php?id=<?php echo $row['id']; ?>">View</a></p>
                            </div>
                            <?php } ?>

                        </div>         
            </div>
        </main>
<footer> <!--This contains information about the privacy statements and Site map-->
<?php include ("footer.php") ?>
</footer>
   
    </body>
</html>