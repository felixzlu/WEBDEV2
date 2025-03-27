<!--Assignment Name: Book Cataloging System: Student Library-->
<!--File Name: search.php-->
<!--Course Name: Web development, CST 8285_332-->
<!--Professor: Grace Pauly-->
<!--Student Names: Felix-Zhonghan Lu, Aravind Santha, Anas Eddaoualline-->
<!--Due Date: March 30, 2025-->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel ="stylesheet" href="./css/style.css">
    <script src="./js/scriptSearch.js" defer></script>
</head>
<body>
<?php include ("header.php") ?>
<?php
    if (!isset($_SESSION['id'])) {
        header("Location: youMustLogin.php");
    }
?>

<main>
    <form action="search2.php" method="GET" onsubmit="return validate();">
        <label for="title">Search by title:</label>
        <input type="text" id="title" name="title">
        <div id="errortitle"></div>

        <label for="author">Search by author:</label>
        <input type="text" id="author" name="author">
        <div id="errorauthor"></div>

        <label for="year">Filter by year:</label>
        <select id="year" name="year">
            <option value="any">Any</option>
            <?php 
                require_once('../backend/db_credentials.php');
                require_once('../backend/database.php');
                $db = db_connect();
            
                $sql = "SELECT DISTINCT year FROM books ORDER BY year;";
                $result_set = mysqli_query($db, $sql);

                while($result=mysqli_fetch_assoc($result_set)){ ?>
                    <option value="<?php echo $result['year']?>"><?php echo $result['year']?></option>
                <?php }
            ?>
        </select>
        <label for="genre">Filter by genre:</label>
        <select id="genre" name="genre">
            <option value="any">Any</option>
            <?php 
                $sql2 = "SELECT DISTINCT genre FROM books ORDER BY genre;";
                $result_set2 = mysqli_query($db, $sql2);

                while($result2=mysqli_fetch_assoc($result_set2)){ ?>
                    <option value="<?php echo $result2['genre']?>"><?php echo $result2['genre']?></option>
                <?php }
            ?>
        </select>
        <input type="submit" value="Search"></input>
    </form>
</main>

<?php include ("footer.php") ?>
</body>
</html>