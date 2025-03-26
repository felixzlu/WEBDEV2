<?php
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();

    //This will fetch the books from the database
    $sql= "SELECT * FROM books ORDER BY date_added ASC LIMIT 5";
    $result_set = mysqli_query($db, $sql); 

    $sql2 = "SELECT b.title, b.description, AVG(r.star_rating) AS avg_rating FROM books b JOIN reviews r ON b.id = r.books_id GROUP BY b.title, b.description ORDER BY avg_rating DESC LIMIT 5;";
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
                        <table>
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row=mysqli_fetch_assoc($result_set)) {?>
                                
                                <tr>
                                    <td><?php echo $row['title'] ?></td>
                                    <td><?php echo $row['description'] ?></td>
                                </tr>
                                </tr><?php } ?>
                            </tbody>
                        </table>
                        <h2>Overall Top picks</h2>
                        <table>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Average Star Rating</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row=mysqli_fetch_assoc($result_set2)) {?>
                            <tr>
                                <td><?php echo $row['title'] ?></td>
                                <td><?php echo $row['description'] ?></td>
                                <td><?php echo $row['avg_rating'] ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                        </table>         
            </div>
        </main>
<footer> <!--This contains information about the privacy statements and Site map-->
<?php include ("footer.php") ?>
</footer>
   
    </body>
</html>