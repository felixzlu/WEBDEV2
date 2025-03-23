<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="./css/style.css">
    <title>Write a review</title>
</head>
<body>
    <?php include ("header.php") ?>
    <?php 
        $bookid = $_GET['bookid'];
        $_SESSION['bookid'] = $bookid;

        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();

        $sql = "SELECT * FROM books WHERE id='$bookid';";
        $result_set = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($result_set);
    ?>
    <h1>Writing review for <?php echo $result['title']; ?></h1>

    <form action="addReview2.php" method="POST">
        <label for="comment">Comments:</label>
        <textarea id="comment" name="comment" rows="4" cols="55"></textarea>
        <label for="rating">Star rating:</label>
        <select id="rating" name="rating">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php include ("footer.php") ?>
</body>
</html>