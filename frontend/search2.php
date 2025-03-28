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
    if (!isset($_SESSION['id'])) {
        header("Location: youMustLogin.php");
    }

    $title = $_GET['title'];
    $author = $_GET['author'];
    $year = $_GET['year'];
    $genre = $_GET['genre'];

    require_once('../backend/db_credentials.php');
    require_once('../backend/database.php');
    $db = db_connect();
    if($year == "any" && $genre == "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%';";
    }
    if($year != "any" && $genre == "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%' AND year = '$year';";
    }
    if($year == "any" && $genre != "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%' AND genre = '$genre';";
    }
    if($year != "any" && $genre != "any"){
        $sql = "SELECT * FROM books WHERE title LIKE '%$title%' AND author LIKE '%$author%' AND year = '$year' AND genre = '$genre';";
    }
    $result_set = mysqli_query($db, $sql);
?>
<h1>Search results:</h1>

<div class="container">
    <?php while($row=mysqli_fetch_assoc($result_set)){?>
    <div class="flex-element">
        <p><?php echo $row['title']?></p>
        <p><?php echo $row['author']?></p>
        <p><?php echo $row['year']?></p>
        <p><?php echo $row['genre']?></p>
        <p><a href="view.php?id=<?php echo $row['id']; ?>">View</a></p>
    </div>
    <?php }?>
    </div>

<?php include ("footer.php") ?>
</body>
</html>