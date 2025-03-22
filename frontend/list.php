<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel ="stylesheet" href="./css/style.css">
        <script src="./js/script.js"></script>
        <title>Book List</title>
    </head>
    <body>
    <?php
        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();
        $sql = "SELECT * FROM books;";
        $result_set = mysqli_query($db, $sql);
    ?>

        <?php include ("header.php") ?>
        <h1>Book List</h1>
        <a href="addBook.php">Add Book to Database</a>
        
        <table>
        <tr>
            <td>id</td>
            <td>title</td>
            <td>author</td>
            <td>year</td>
            <td>genre</td>
            <td>description</td>
            <td>&nbsp</td>
            <td>&nbsp</td>
        <?php while($result = mysqli_fetch_assoc($result_set)) { ?>
        <tr>
            <td><?php echo $result['id']; ?></td>
            <td><?php echo $result['title']; ?></td>
            <td><?php echo $result['author'] ; ?></td>
            <td><?php echo $result['year']; ?></td>
            <td><?php echo $result['genre']; ?></td>
            <td><?php echo $result['description']; ?></td>
            <td><a href="<?php echo"view.php?id=" . $results['id']; ?>">View</a></td>
            <td><a href="<?php echo"delete.php?id=" . $results['id']; ?>">Delete</a></td>
        </tr>
        <?php } ?>
        </table>

        <?php include ("footer.php") ?>
    </body>
</html>
