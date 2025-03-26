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

<table>
    <?php while($row=mysqli_fetch_assoc($result_set)){?>
    <tr>
        <td><?php echo $row['title']?></td>
        <td><?php echo $row['author']?></td>
        <td><?php echo $row['year']?></td>
        <td><?php echo $row['genre']?></td>
    </tr>
    <?php }?>
</table>

<?php include ("footer.php") ?>
</body>
</html>