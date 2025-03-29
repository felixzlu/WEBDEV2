
<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: addReview.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!---This code ensures proper rendering and touch zooming on mobile devices--->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!--Link to the external css file for styling-->
    <link rel ="stylesheet" href="./css/style.css">
    <title>Write a review</title>
</head>
<body>
<!---This ensures the header file for constant navigation-->
    <?php include ("header.php") ?>
    <main>
    <?php
/***This code checks if the user is logged in, if not , rediect to the login page***/
        if(!isset($_SESSION['id'])){
            header("Location: youMustLogin.php");
        }
    ?>

    <?php 
        $bookid = $_GET['bookid'];//This retrieves the bookid from the database
        $_SESSION['bookid'] = $bookid;
/***THis includes the database credentials and connection functions */
        require_once('../backend/db_credentials.php');
        require_once('../backend/database.php');
        $db = db_connect();//This establish a connection to the database
/***This Sql query fetches the book from the database */
        $sql = "SELECT * FROM books WHERE id='$bookid';";
        $result_set = mysqli_query($db, $sql);
        $result = mysqli_fetch_assoc($result_set);
    ?>
    <!---This display the book for which the review is being written--->
    <h1>Writing review for <?php echo $result['title']; ?></h1>
    <!---This is the review submission form--->
    <form action="addReview2.php" method="POST">
    <!---This is the input field for the user comments--->
        <label for="comment">Comments:</label>
        <textarea id="comment" name="comment" rows="4" cols="55"></textarea>
    <!--This is the dropdown for selecting the star rating-->
        <label for="rating">Star rating:</label>
        <select id="rating" name="rating">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
    <!--This button submits the review by the user-->
        <input type="submit" value="Submit">
    </form>
    </main>
    <?php include ("footer.php") ?>
</body>
</html>