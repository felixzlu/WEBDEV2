<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: search2.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="./css/style.css">
    <title>Search Results</title>
</head>
<body>
<?php include ("header.php") ?>
<?php
/****This checks if the user is logged in, if not , redirect the user to the login page */
    if (!isset($_SESSION['id'])) {
        header("Location: youMustLogin.php");
    }
/****This captures the search parameters from the query string */
    $title = $_GET['title'];
    $author = $_GET['author'];
    $year = $_GET['year'];
    $genre = $_GET['genre'];
/****database credentials and connection */
    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();//Establish the connection to the database
    /****sql query, if no year and genre filter are applied , just search by title and author*/
    if($year == "any" && $genre == "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%';";
    }
    /****If a specific year is chosen, filter by title, author and year */
    if($year != "any" && $genre == "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%' AND year = '$year';";
    }
    /****If a specific genre is chosen, filter by title, author and genre */
    if($year == "any" && $genre != "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%' AND genre = '$genre';";
    }
    /***If both year and genre are selected , filter by title, author, year and genre */
    if($year != "any" && $genre != "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%' AND year = '$year' AND genre = '$genre';";
    }
    $result_set = mysqli_query($db, $sql);
?>
 
<h1>Search results:</h1>
<!---This displays the results in a container----->
<div class="container">
    <?php while($row=mysqli_fetch_assoc($result_set)){?>
    <div class="flex-element">
    <!----Display book title, author, year and genre->
        <p><?php echo $row['title']?></p>
        <p><?php echo $row['author']?></p>
        <p><?php echo $row['year']?></p>
        <p><?php echo $row['genre']?></p>
    <--link to view more details about the book---->
        <p><a href="view.php?id=<?php echo $row['id']; ?>">View</a></p>
    </div>
    <?php }?>
    </div>

<?php include ("footer.php") ?>
</body>
</html>